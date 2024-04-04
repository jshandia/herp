<div id="offer-letter-settings" class="card">
                        <div class="col-md-12">
                            <div class="card-header d-flex justify-content-between">
                                <h5>{{ __('Offer Letter') }}</h5>
                                <div class="d-flex justify-content-end drp-languages">
                                    <ul class="list-unstyled mb-0 m-2">
                                        <li class="dropdown dash-h-item drp-language" style="margin-top: -7px;">
                                            <a class="dash-head-link dropdown-toggle arrow-none me-0"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-haspopup="false" aria-expanded="false" id="dropdownLanguage">
                                                <span class="drp-text hide-mob text-primary me-2">
                                                    {{ ucfirst($offerlangName->full_name) }}
                                                </span>
                                                <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                                            </a>
                                            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end"
                                                aria-labelledby="dropdownLanguage">
                                                @foreach ($currantLang as $code => $offerlangs)
                                                    <a href="{{ route('get.offerlatter.language', ['noclangs' => $noclang, 'explangs' => $explang, 'offerlangs' => $code, 'joininglangs' => $joininglang]) }}"
                                                        class="dropdown-item ms-1 {{ $offerlangs == $code ? 'text-primary' : '' }}">{{ ucFirst($offerlangs) }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-bold pb-3">{{ __('Placeholders') }}</h5>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-header card-body">
                                            <div class="row text-xs">
                                                <div class="row">
                                                    <p class="col-4">{{ __('Applicant Name') }} : <span
                                                            class="pull-end text-primary">{applicant_name}</span></p>
                                                    <p class="col-4">{{ __('Company Name') }} : <span
                                                            class="pull-right text-primary">{app_name}</span></p>
                                                    <p class="col-4">{{ __('Job title') }} : <span
                                                            class="pull-right text-primary">{job_title}</span></p>
                                                    <p class="col-4">{{ __('Job type') }} : <span
                                                            class="pull-right text-primary">{job_type}</span></p>
                                                    <p class="col-4">{{ __('Proposed Start Date') }} : <span
                                                            class="pull-right text-primary">{start_date}</span></p>
                                                    <p class="col-4">{{ __('Working Location') }} : <span
                                                            class="pull-right text-primary">{workplace_location}</span>
                                                    </p>
                                                    <p class="col-4">{{ __('Days Of Week') }} : <span
                                                            class="pull-right text-primary">{days_of_week}</span></p>
                                                    <p class="col-4">{{ __('Salary') }} : <span
                                                            class="pull-right text-primary">{salary}</span></p>
                                                    <p class="col-4">{{ __('Salary Type') }} : <span
                                                            class="pull-right text-primary">{salary_type}</span></p>
                                                    <p class="col-4">{{ __('Salary Duration') }} : <span
                                                            class="pull-end text-primary">{salary_duration}</span></p>
                                                    <p class="col-4">{{ __('Offer Expiration Date') }} : <span
                                                            class="pull-right text-primary">{offer_expiration_date}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-border-style ">

                                {{ Form::open(['route' => ['offerlatter.update', $offerlang], 'method' => 'post']) }}
                                <div class="form-group col-12">
                                    {{ Form::label('content', __(' Format'), ['class' => 'form-label text-dark']) }}
                                    <textarea name="content" class="summernote-simple0 summernote-simple">{!! isset($currOfferletterLang->content) ? $currOfferletterLang->content : '' !!}</textarea>

                                </div>
                                {{--                                <div class="card-footer text-end"> --}}
                                {{--                                    {{ Form::submit(__('Save Changes'), ['class' => 'btn  btn-primary']) }} --}}
                                {{--                                </div> --}}

                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>