<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Image;
use App\Models\JabatanKoperasi;
use App\Models\Kalender;
use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Penghargaan;
use App\Models\SimpanPinjam;
use App\Models\Video;
use App\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Artikel::paginate(3);
        $banner = Banner::where('is_active', '=', 1)->get();

        foreach ($artikel as $datum) {
            $datum['formatted_dtime'] = $datum['created_at']->format('d-m-Y');
        }

        $data = [
            'artikel' => $artikel,
            'banner' => $banner
        ];

        return view('index', ['data' => $data]);
    }

    public function historyPage()
    {
        return view('profile.history');
    }

    public function aboutUsPage()
    {
        return view('profile.about-us');
    }

    public function ourBusinessPage()
    {
        return view('profile.our-business');
    }

    public function managementPage()
    {
        $data = JabatanKoperasi::with('user.jabatanKbn')->get();

        $pembina = [];
        $pengawas = [];
        $pengurus = [];
        $pengelola = [];
        $staff = [];

        foreach ($data as $datum) {
            if ($datum->user_id !== null || $datum->is_custom !== null) {
                if (str_contains(strtolower($datum['nama']), 'pembina')) {
                    array_push($pembina, $datum);
                } else if (str_contains(strtolower($datum['nama']), 'pengawas')) {
                    array_push($pengawas, $datum);
                } else if (str_contains(strtolower($datum['nama']), 'pengurus')) {
                    array_push($pengurus, $datum);
                } else if (str_contains(strtolower($datum['nama']), 'pengelola')) {
                    array_push($pengelola, $datum);
                } else {
                    array_push($staff, $datum);
                }
            }
        }

        $management = [];
        array_push($management, $pembina);
        array_push($management, $pengawas);
        array_push($management, $pengurus);
        array_push($management, $pengelola);
        array_push($management, $staff);

        return view('profile.our-team', ['data' => $management]);
    }

    public function savingPage()
    {
        // return Auth::user();
        $data = Auth::user() !== null
            ? User::where('id', '=', Auth::user()->id)->with(['simpans', 'divisi', 'jabatanKbn'])->first()
            : null;

        $data['totalAngsuran'] = 0;
        $data['totalSaldo'] = 0;
        $data['lastUpdated'] = 'Belum ada data';

        $data['currDate'] = Carbon::now()->locale('id');

        $data['currDate']->settings(['formatFunction' => 'translatedFormat']);

        // $data['bulan'] = $data['currDate']->format('F');
        $data['currDate'] = $data['currDate']->format('d M Y');

        if ($data !== null && isset($data->simpans)) {
            foreach ($data->simpans as $datum) {
                $data['totalAngsuran'] = $data['totalAngsuran'] + $datum->jumlah_angsuran;
                $data['totalSaldo'] = $data['totalSaldo'] + $datum->total;
                $data['lastUpdated'] = $datum->created_at;
                $data['bulan'] = $data['lastUpdated']->format('F');
                $data['bulan_ind'] = $this->getMonth($data['lastUpdated']->format('F'));
                $data['tahun'] = $data['lastUpdated']->format('Y');
            }
        }

        return view('product.saving', ['data' => $data]);
    }

    public function loanPage()
    {
        $data = Auth::user() !== null
            ? User::where('id', '=', Auth::user()->id)->with(['pinjams', 'divisi'])->first()
            : null;

        $data['totalAngsuran'] = 0;
        $data['totalSaldo'] = 0;
        $data['lastUpdated'] = 'Belum ada data';

        $data['currDate'] = Carbon::now()->locale('id');

        $data['currDate']->settings(['formatFunction' => 'translatedFormat']);

        $data['bulan'] = $data['currDate']->format('F');

        if ($data !== null && isset($data->pinjams)) {
            foreach ($data->pinjams as $datum) {
                $data['totalAngsuran'] = $data['totalAngsuran'] + $datum->jumlah_angsuran;
                $data['totalSaldo'] = $data['totalSaldo'] + $datum->total;
                $data['lastUpdated'] = $datum->created_at;
                $data['bulan'] = $data['lastUpdated']->format('F');
                $data['bulan_ind'] = $this->getMonth($data['lastUpdated']->format('F'));
                $data['tahun'] = $data['lastUpdated']->format('Y');
            }
        }

        return view('product.loan', ['data' => $data]);
    }

    public function printSaveLoanPdf($lang)
    {
        if ($lang !== 'eng' && $lang !== 'id') {
            abort('404');
        }

        // return Auth::user();
        $data = Auth::user() !== null
            ? User::where('id', '=', Auth::user()->id)->with(['simpans', 'pinjams', 'divisi', 'jabatanKbn'])->first()
            : null;

        $data['totalAngsuran'] = 0;
        $data['totalSaldo'] = 0;
        $data['lastUpdated'] = 'Belum ada data';

        $data['currDate'] = Carbon::now()->locale('id');

        $data['currDate']->settings(['formatFunction' => 'translatedFormat']);

        $data['bulan'] = $data['currDate']->format('F');
        $data['tahun'] = $data['currDate']->format('Y');
        $data['currDate'] = $data['currDate']->format('d M Y');
        $data['lang'] = $lang;

        if ($data !== null && isset($data->simpans)) {
            foreach ($data->simpans as $datum) {
                $data['totalAngsuran'] = $data['totalAngsuran'] + $datum->jumlah_angsuran;
                $data['totalSaldo'] = $data['totalSaldo'] + $datum->total;
                $data['lastUpdated'] = $datum->created_at;
                $data['bulan'] = $data['lastUpdated']->format('F');
                $data['bulan_ind'] = $this->getMonth($data['lastUpdated']->format('F'));
                $data['tahun'] = $data['lastUpdated']->format('Y');
            }
        }

        if ($data !== null && isset($data->pinjams)) {
            foreach ($data->pinjams as $datum) {
                $data['totalAngsuranPinjam'] = $data['totalAngsuranPinjam'] + $datum->jumlah_angsuran;
                $data['totalSaldoPinjam'] = $data['totalSaldoPinjam'] + $datum->total;
                $data['lastUpdated'] = $datum->created_at;
                $data['bulan'] = $data['lastUpdated']->format('F');
                $data['bulan_ind'] = $this->getMonth($data['lastUpdated']->format('F'));
                $data['tahun'] = $data['lastUpdated']->format('Y');
            }
        }

        // return view('print.saveloan_pdf', ['data' => $data]);

        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
            ->loadview('print.saveloan_pdf', ['data' => $data]);
        $pdf->setPaper('A4', 'landscape');
        // return $pdf->download('laporan-simpan-pinjam.pdf');
        return $pdf->stream('laporan-simpan-pinjam.pdf');
    }

    public function minimartPage()
    {
        return view('product.minimart');
    }

    public function stationaryPage()
    {
        return view('product.stationary');
    }

    public function cleaningServicePage()
    {
        return view('product.cleaning-service');
    }

    public function drinksPage()
    {
        return view('product.drinks');
    }

    public function driverPage()
    {
        return view('product.driver');
    }

    public function administrationStaffPage()
    {
        return view('product.administration-staff');
    }

    public function simpanPage()
    {
        return view('product.simpan');
    }    
    public function suratPage()
    {
        return view('product.surat');
    }  
    // public function othersPage()
    // {
    //     return view('product.others');
    // }

    // public function vehicleRegistrationServicePage()
    // {
    //     return view('product.vehicle-registration-service');
    // }

    public function photocopyMachineRentalPage()
    {
        return view('product.photocopy-machine-rental');
    }

    public function whistleblowerPage()
    {
        return view('member-forum.whistleblower');
    }

    public function complaintPage()
    {
        return view('member-forum.complaint');
    }

    public function faqPage()
    {
        $data = Faq::all();

        return view('member-forum.faq', ['data' => $data]);
    }

    public function customerRelationshipPage()
    {
        return view('member-forum.customer-relationship');
    }

    public function photoAndVideoPage()
    {
        $photos = Image::all();
        $videos = Video::all();

        $data = [];

        foreach ($photos as $photo) {
            $photo['selector'] = 'photo';
            array_push($data, $photo);
        }

        foreach ($videos as $video) {
            $video['selector'] = 'video';
            array_push($data, $video);
        }

        usort($data, function ($a, $b) {
            if ($a["updated_at"] == $b["updated_at"])
                return (0);
            return (($a["updated_at"] < $b["updated_at"]) ? -1 : 1);
        });

        foreach ($data as $datum) {
            $datum['category'] = strtolower($datum['category']);
            $datum['category'] = str_replace('layanan ', '', $datum['category']);
        };

        return view('media.photo-and-video', ['data' => $data]);
    }

    public function newsPage()
    {
        // $array = [];
        // Artikel::where('type', 'Berita')->chunk(3, function ($data) use (&$array) {
        //     foreach($data as $datum) {
        //         $datum['category'] = strtolower($datum['category']);
        //         $datum['category'] = str_replace('layanan ', '', $datum['category']);
        //     };

        //     array_push($array, $data);
        // });

        $data = Artikel::where('type', 'Berita')->get();

        foreach ($data as $datum) {
            $datum['category'] = strtolower($datum['category']);
            $datum['category'] = str_replace('layanan ', '', $datum['category']);
        };

        return view('media.news', ['data' => $data]);
    }

    public function announcementPage()
    {
        $data = Artikel::where('type', 'pengumuman')->get();

        foreach ($data as $datum) {
            $datum['category'] = strtolower($datum['category']);
            $datum['category'] = str_replace('layanan ', '', $datum['category']);
        };

        return view('media.announcement', ['data' => $data]);
    }

    public function contentSinglePage(Artikel $artikel)
    {
        return view('media.single-page', ['data' => $artikel]);
    }

    public function awardAndCertificatePage()
    {
        $awards = Penghargaan::all();

        $data = [];

        foreach ($awards as $award) {
            array_push($data, $award);
        }

        usort($data, function ($a, $b) {
            if ($a["updated_at"] == $b["updated_at"])
                return (0);
            return (($a["updated_at"] < $b["updated_at"]) ? -1 : 1);
        });

        return view('media.award-and-certificate', ['data' => $data]);
    }

    public function calendarPage()
    {
        $data = Kalender::all();

        return view('media.calendar', ['data' => $data]);
    }

    public function contactUsPage()
    {
        return view('contact-us');
    }

    public function flaticonPage()
    {
        return view('flaticon');
    }

    public function fontAwesomePage()
    {
        return view('fontawesome');
    }

    private function getMonth($month)
    {
        switch ($month) {
            case  'January':
                return  "Januari";
                break;
            case  'February':
                return  "Februari";
                break;
            case  'March':
                return  "Maret";
                break;
            case  'April':
                return  "April";
                break;
            case  'May':
                return  "Mei";
                break;
            case  'June':
                return  "Juni";
                break;
            case  'July':
                return  "Juli";
                break;
            case  'August':
                return  "Agustus";
                break;
            case  'September':
                return  "September";
                break;
            case  'October':
                return  "Oktober";
                break;
            case  'November':
                return  "November";
                break;
            case  'December':
                return  "Desember";
                break;
        }
    }
}
