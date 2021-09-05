<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
            Dashboard
        </h2>

        <section class="section">

            {{-- Row 1: KPI Cards --}}
            <div class="row ">

                {{-- Categories --}}
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="height: 170px;">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">

                                        {{-- Metric --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Categories:</h5>
                                                <h2 class="mb-3 font-18">0</h2>
                                            </div>
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="admin/assets/img/banner/categories.png" alt="" style="height: 140px;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Users --}}
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="height: 170px;">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">

                                        {{-- Metric --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Users:</h5>
                                                <h2 class="mb-3 font-18">{{ $userCount }}</h2>
                                            </div>
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="admin/assets/img/banner/users.png" alt="" style="height: 140px;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Listings --}}
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="{{ route('admin.listings.index') }}" class="text-decoration-none">
                        <div class="card" style="height: 170px;">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">

                                        {{-- Metric --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Listings:</h5>
                                                <h2 class="mb-3 font-18">{{ $listingCount }}</h2>
                                            </div>
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="admin/assets/img/banner/posts.png" alt="" style="height: 140px;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Posts --}}
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="height: 170px;">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">

                                        {{-- Metric --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Posts:</h5>
                                                <h2 class="mb-3 font-18">0</h2>
                                            </div>
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="admin/assets/img/banner/posts.png" alt="" style="height: 140px;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>


            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </section>


    </x-slot>

</x-app-layout>
