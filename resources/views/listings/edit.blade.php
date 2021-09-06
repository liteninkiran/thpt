<x-app-layout>

    <x-slot name="header">

        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        {{-- @include('includes.messages') --}}

                        <div class="card">

                            {{-- Header --}}
                            <div class="card-header">
                                <h4>Edit Listing #{{ $listing->id }}</h4>
                            </div>

                            <form action="{{ route('admin.listings.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">

                                    {{-- Title --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="title" type="text" class="form-control" value="{{ $listing->title }}">
                                        </div>
                                    </div>

                                    {{-- Opportunity --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opportunity</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- The "form-control" class disables the 'rows' attribute from TextArea. It also disables vertical resizing. Manually adding styles. --}}
                                            <textarea name="opportunity" rows="5" style="border-radius: 0.25rem; color: #495057; background-color: #fdfdff; border-color: #e4e6fc; width: 100%; resize: vertical;">{{ $listing->opportunity }}</textarea>
                                        </div>
                                    </div>

                                    {{-- Image --}}
{{-- 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="cover_image" id="image-upload" value="{{ $listing->cover_image }}">
                                            </div>
                                        </div>
                                    </div>
 --}}
                                    {{-- Submit Button --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">Update Listing</button>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </x-slot>

</x-app-layout>
