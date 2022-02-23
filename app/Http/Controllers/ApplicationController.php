<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function historyPage() {
        return view('profile.history');
    }

    public function aboutUsPage() {
        return view('profile.about-us');
    }

    public function ourBusinessPage() {
        return view('profile.our-business');
    }

    public function managementPage() {
        return view('profile.our-team');
    }

    public function reportPage() {
        return view('profile.report');
    }

    public function savingAndLoanPage() {
        return view('product.saving-loan');
    }

    public function minimartPage() {
        return view('product.minimart');
    }

    public function stationaryPage() {
        return view('product.stationary');
    }

    public function cleaningServicePage() {
        return view('product.cleaning-service');
    }

    public function gardeningPage() {
        return view('product.gardening');
    }

    public function driverPage() {
        return view('product.driver');
    }

    public function administrationStaffPage() {
        return view('product.administration-staff');
    }

    public function othersPage() {
        return view('product.others');
    }

    public function vehicleRegistrationServicePage() {
        return view('product.vehicle-registration-service');
    }

    public function photocopyMachineRentalPage() {
        return view('product.photocopy-machine-rental');
    }

    public function whistleblowerPage() {
        return view('member-forum.whistleblower');
    }

    public function complaintPage() {
        return view('member-forum.complaint');
    }

    public function faqPage() {
        return view('member-forum.faq');
    }

    public function customerRelationshipPage() {
        return view('member-forum.customer-relationship');
    }

    public function photoAndVideoPage() {
        return view('media.photo-and-video');
    }

    public function newsPage() {
        return view('media.news');
    }

    public function announcementPage() {
        return view('media.announcement');
    }

    public function awardAndCertificatePage() {
        return view('media.award-and-certificate');
    }

    public function calendarPage() {
        return view('media.calendar');
    }

    public function contactUsPage() {
        return view('contact-us');
    }
}
