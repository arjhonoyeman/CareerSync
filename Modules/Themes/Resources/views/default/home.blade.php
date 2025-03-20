@extends('themes::default.layout')


@section('content')
@include('themes::default.nav')
 <!-- END HOME -->
    <section class="bg-home" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1 class="home-title">@lang('Find a job with') {{ config('app.name')}}</h1>

                                <p class="text-primary mt-3 f-20">@lang('OWN A GOOD Resume-CV AND DREAM JOB')</p>
                                <p>@lang('100+ job opportunities are successfully connected every day')</p>
                                <div class="mt-3">
                                    <a href="{{ route('templates') }}" class="btn btn-primary">@lang('Create Resume Online')</a>
                                    <a href="{{ route('jobslist') }}" class="btn btn-primary">@lang('Find Jobs')</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="mt-2">
                                <img src="{{ asset('img/ohh.png')}}" width="400" class="img-fluid">
                            </div>
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <h5><strong>@lang('Discover now 100+ best jobs on') {{ config('app.name')}}</strong></h5>
                                </div>
                            </div>
                            <form id="form_search_home_page" action="javascript:void(0);">
                                <div class="row">
                                    
                                        <div class="form-group col-md-4">
                                            <input class="form-control" value="" placeholder="@lang('Job title, position you want to apply for')" id="keyword" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="form-control" id="city"  tabindex="-1" aria-hidden="true">
                                                <option value="">@lang('All location')</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="form-control" id="category"  tabindex="-1" aria-hidden="true">
                                                <option value="">@lang('All Functional Area')</option>
                                                @foreach($functional_areas as $functional_area)
                                                <option value="{{ $functional_area->id }}">{{ $functional_area->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 form-group col-button">
                                            <button class="btn btn-primary"><i class="pe-7s-search"></i> @lang('Find job')</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
    @if(config('app.ads_home_page_below_jobs_search'))
     <section class="mb-4">
         <div class="container">
             <div class="row">
                 <div class="ads-home-page">
                    {!! config('app.ads_home_page_below_jobs_search') !!}
                 </div>
             </div>
         </div>
     </section>
     @endif
   
    <!-- END HOME -->

    @isset($companies)
    <!-- START Featured Companies -->
    <section class="section pt-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="mb-0">@lang('Featured Companies')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel">
                        @foreach($companies as $company)
                            <div class="item">
                                <div class="employer-card">
                                    <a href="{{ route('company', ['slug' => $company->slug]) }}" title="Company name">
                                        <img src="{{ URL::to('/') }}/storage/user_storage/{{ $company->user_id. "/". $company->logo }}" alt="Connect People" title="Connect People"></a>         
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Featured Companies -->
    @endisset
    <!-- START Featured Jobs -->
     <section class="section pt-5">
         <div class="container">
             <div class="row mb-4">
                 <div class="col-lg-12">
                     <div class="text-center">
                         <h2 class="mb-0">@lang('Featured Jobs')</h2>
                     </div>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-md-12">
                     <div class="row">
                         
                            @foreach($featuredJobs as $job)
                                <div class="col-md-6">
                                    @include('themes::default.includes.item_job_side', ['job' => $job])
                                 </div>
                            @endforeach
                        

                     </div>
                 </div>
             </div>
            
             <div class="btn-homepage-center"><a href="{{ route('jobslist', ['featured' => '1']) }}" class="btn btn-primary">@lang('View All Featured Jobs')</a></div>
         </div>
     </section>
    <!-- END Featured Jobs -->

    <!-- START Latest Jobs -->
     <section class="section pt-5">
         <div class="container">
             <div class="row mb-4">
                 <div class="col-lg-12">
                     <div class="text-center">
                         <h2 class="mb-0">@lang('Latest Jobs')</h2>
                     </div>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-md-12">
                     <div class="row">
                        @foreach($lastestJobs as $job)
                         <div class="col-md-6">
                            @include('themes::default.includes.item_job_side', ['job' => $job])
                         </div>
                        @endforeach
                     </div>
                 </div>
             </div>
             <div class="btn-homepage-center"><a href="{{ route('jobslist', ['lastest' => '1']) }}" class="btn btn-primary">@lang('View All Latest Jobs')</a></div>
         </div>
     </section>
  
    
@stop

@push('scripts')
<script type="text/javascript">
    var url_search_home_page = "{{ route('jobslist', ['q' => ':q']) }}";
</script>
@endpush