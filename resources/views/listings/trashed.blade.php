<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-5">
            Listings
        </h2>

        <section class="section">

            <div class="section-body">

                {{-- Filters --}}
                <div class="row">

                    <div class="col-12">

                        <div class="card mb-0">

                            <div class="card-body">

                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.listings.index') }}">All <span class="badge badge-white">{{ $count }}</span></a></li>
                                    <li class="nav-item"><a class="nav-link active" href="">Trash <span class="badge badge-primary">{{ $listings->total() }}</span></a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- Messages --}}
                <div class="row mt-4">
                    <div class="col-12">
                        {{-- @include('includes.messages') --}}
                    </div>
                </div>

                @if ($listings->count() > 0)

                    {{-- Data --}}
                    <div class="row">

                        <div class="col-12">

                            <div class="card">

                                {{-- Data --}}
                                <div class="card-body">

                                    {{-- Search Bar --}}
                                    <div class="float-right">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="clearfix mb-3"></div>

                                    {{-- Data --}}
                                    <div class="table-responsive">

                                        {{-- Table --}}
                                        <table class="table table-striped">

                                            {{-- Header Row --}}
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Posted By</th>
                                                <th>Date Posted</th>
                                            </tr>

                                            {{-- Data --}}
                                            @foreach ($listings as $listing)

                                                <tr>

                                                    {{-- Name --}}
                                                    <td>{{ $listing->name }}
                                                        <div class="table-links">
                                                            <a href="{{ route('admin.listings.edit', $listing->id) }}">Edit</a><div class="bullet"></div>
                                                            <a href="{{ route('admin.listings.destroy', $listing->id) }}">Trash</a>
                                                        </div>
                                                    </td>

                                                    {{-- Title --}}
                                                    <td>{!! $listing->title !!}
                                                        <div class="table-links">
                                                            <a href="{{ route('admin.listings.edit', $listing->id) }}">Edit</a><div class="bullet"></div>
                                                            <a href="{{ route('admin.listings.destroy', $listing->id) }}">Trash</a>
                                                        </div>
                                                    </td>

                                                    {{-- Posted By --}}
                                                    <th>
                                                        <img alt="image" src="{{ $listing->create_user->getGravatarAttribute() }}" class="user-img-radious-style" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="top" title="{{ $listing->create_user->name }}">
                                                    </th>

                                                    {{-- Date Posted --}}
                                                    <td>{{ $listing->date_posted->diffForHumans() }}</td>

                                                </tr>

                                            @endforeach

                                        </table>

                                    </div>

                                    {{-- Pagination --}}
                                    <div class="float-right">
                                        <nav>
                                            <ul class="pagination">
                                                {{ $listings->links('pagination::bootstrap-4') }}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @else

                    <h4 class="mt-4">No records to display</h4>

                @endif

            </div>

        </section>


    </x-slot>

</x-app-layout>
