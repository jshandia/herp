<div id="experience-certificate-settings" class="card">
                        <div class="col-md-12">
                            <div class="card-header d-flex justify-content-between">
                                <h5>{{ __('Experience Certificate') }}</h5>
                                <div class="d-flex justify-content-end drp-languages">
                                    <ul class="list-unstyled mb-0 m-2">
                                        <li class="dropdown dash-h-item drp-language" style="margin-top: -7px;">
                                            <a class="dash-head-link dropdown-toggle arrow-none me-0"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-haspopup="false" aria-expanded="false" id="dropdownLanguage1">
                                                <span class="drp-text hide-mob text-primary me-2">
                                                    {{ ucfirst($explangName->full_name) }}
                                                </span>
                                                <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                                            </a>
                                            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end"
                                                aria-labelledby="dropdownLanguage1">
                                                @foreach ($currantLang as $code => $explangs)
                                                    <a href="{{ route('get.experiencecertificate.language', ['noclangs' => $noclang, 'explangs' => $code, 'offerlangs' => $offerlang, 'joininglangs' => $joininglang]) }}"
                                                        class="dropdown-item {{ $explangs == $code ? 'text-primary' : '' }}">{{ ucFirst($explangs) }}</a>
                                                @endforeach
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                            </div>
                            <div class="card-body ">
                                <h5 class="font-weight-bold pb-3">{{ __('Placeholders') }}</h5>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-header card-body">
                                            <div class="row text-xs">
                                                <div class="row">
                                                    <p class="col-4">{{ __('Company Name') }} : <span
                                                            class="pull-right text-primary">{app_name}</span></p>
                                                    <p class="col-4">{{ __('Employee Name') }} : <span
                                                            class="pull-right text-primary">{employee_name}</span></p>
                                                    <p class="col-4">{{ __('Date of Issuance') }} : <span
                                                            class="pull-right text-primary">{date}</span></p>
                                                    <p class="col-4">{{ __('Designation') }} : <span
                                                            class="pull-right text-primary">{designation}</span></p>
                                                    <p class="col-4">{{ __('Start Date') }} : <span
                                                            class="pull-right text-primary">{start_date}</span></p>
                                                    <p class="col-4">{{ __('Branch') }} : <span
                                                            class="pull-right text-primary">{branch}</span></p>
                                                    <p class="col-4">{{ __('Start Time') }} : <span
                                                            class="pull-end text-primary">{start_time}</span></p>
                                                    <p class="col-4">{{ __('End Time') }} : <span
                                                            class="pull-right text-primary">{end_time}</span></p>
                                                    <p class="col-4">{{ __('Number of Hours') }} : <span
                                                            class="pull-right text-primary">{total_hours}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-border-style ">

                                {{ Form::open(['route' => ['experiencecertificate.update', $explang], 'method' => 'post']) }}
                                <div class="form-group col-12">
                                    {{ Form::label('content', __(' Format'), ['class' => 'form-label text-dark']) }}
                                    <textarea name="content" class="summernote-simple2 summernote-simple">{!! isset($curr_exp_cetificate_Lang->content) ? $curr_exp_cetificate_Lang->content : '' !!}</textarea>

                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>