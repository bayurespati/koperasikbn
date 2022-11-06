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
use App\Models\SimpanPinjam;
use App\Models\Video;
use App\User;
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

        foreach ($data as $datum) {
            if (str_contains(strtolower($datum['nama']), 'pembina')) {
                array_push($pembina, $datum);
            } else if (str_contains(strtolower($datum['nama']), 'pengawas')) {
                array_push($pengawas, $datum);
            } else if (str_contains(strtolower($datum['nama']), 'pengurus')) {
                array_push($pengurus, $datum);
            } else if (str_contains(strtolower($datum['nama']), 'pengelola')) {
                array_push($pengelola, $datum);
            }
        }

        $management = [];
        array_push($management, $pembina);
        array_push($management, $pengawas);
        array_push($management, $pengurus);
        array_push($management, $pengelola);

        return view('profile.our-team', ['data' => $management]);
    }

    // public function reportInternalPage()
    // {
    //     $data = Laporan::where('is_internal', true)->get();
    //     return view('profile.report-internal', ['data' => $data]);
    // }

    // public function reportExternalPage()
    // {
    //     $data = Laporan::where('is_internal', false)->get();
    //     return view('profile.report-external', ['data' => $data]);
    // }

    // public function savingAndLoanPage()
    // {
    //     return view('product.saving-loan');
    // }

    public function savingPage()
    {
        // return Auth::user();
        $data = Auth::user() !== null
            ? User::where('id', '=', Auth::user()->id)->with(['simpans', 'divisi'])->first()
            : null;

        $data['totalAngsuran'] = 0;
        $data['totalSaldo'] = 0;

        $date = Carbon::now()->locale('id');

        $date->settings(['formatFunction' => 'translatedFormat']);

        $data['bulan'] = $date->format('F');

        if ($data !== null && isset($data->simpans)) {
            foreach ($data->simpans as $datum) {
                $data['totalAngsuran'] = $data['totalAngsuran'] + $datum->jumlah_angsuran;
                $data['totalSaldo'] = $data['totalSaldo'] + $datum->saldo;
            }
        }

        // return $data; use for test

        return view('product.saving', ['data' => $data]);
    }

    public function loanPage()
    {
        $data = Auth::user() !== null
            ? User::where('id', '=', Auth::user()->id)->with(['pinjams', 'divisi'])->first()
            : null;

        $data['totalAngsuran'] = 0;
        $data['totalSaldo'] = 0;

        $date = Carbon::now()->locale('id');

        $date->settings(['formatFunction' => 'translatedFormat']);

        $data['bulan'] = $date->format('F');

        if ($data !== null && isset($data->pinjams)) {
            foreach ($data->pinjams as $datum) {
                $data['totalAngsuran'] = $data['totalAngsuran'] + $datum->jumlah_angsuran;
                $data['totalSaldo'] = $data['totalSaldo'] + $datum->saldo;
            }
        }

        return view('product.loan', ['data' => $data]);
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

    public function gardeningPage()
    {
        return view('product.gardening');
    }

    public function driverPage()
    {
        return view('product.driver');
    }

    public function administrationStaffPage()
    {
        return view('product.administration-staff');
    }

    public function othersPage()
    {
        return view('product.others');
    }

    public function vehicleRegistrationServicePage()
    {
        return view('product.vehicle-registration-service');
    }

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
        return view('media.award-and-certificate');
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
}
