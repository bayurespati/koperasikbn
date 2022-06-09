<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Faq;
use App\Models\Image;
use App\Models\JabatanKoperasi;
use App\Models\Kalender;
use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Video;

class ApplicationController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
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
        $data = JabatanKoperasi::with('user')->get();

        return view('profile.our-team', ['data' => $data]);
    }

    // public function reportInternalPage()
    // {
    //     $data = Laporan::where('is_internal', true)->get();
    //     return view('profile.report-internal', ['data' => $data]);
    // }

    public function reportExternalPage()
    {
        $data = Laporan::where('is_internal', false)->get();
        return view('profile.report-external', ['data' => $data]);
    }

    public function savingAndLoanPage()
    {
        return view('product.saving-loan');
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
            array_push($data, $photo);
        }

        foreach ($videos as $video) {
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

    public function contentSinglePage(Artikel $artikel) {
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
