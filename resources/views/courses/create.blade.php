@extends('../mainI')
@section('content')
       <!-- content -->
       <div class="page-content">
            <div class="page-content-inner">

                <div class="d-flex">
                    <nav id="breadcrumbs" class="mb-3">
                        <ul>
                            <li><a href="#"> <i class="uil-home-alt"></i> </a></li>
                            <li><a href="#"> Cursos </a></li>
                            <li>Criar Novo</li>
                        </ul>
                    </nav>
                </div>



                <div class="card">
                    <div class="card-header border-bottom-0 py-4">
                        <h5> Course Manager </h5>
                    </div>


                    <ul class="uk-child-width-expand uk-tab" uk-switcher="connect: #course-edit-tab ; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                        <li class="uk-active"><a href="#"> Basic</a></li>
                        <li><a href="#"> Curriculum</a></li>
                        <li><a href="#">Meta data</a></li>
                        <li><a href="#">Requirements</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Finish</a></li>
                    </ul>

                    <div class="card-body">

                        <ul class="uk-switcher uk-margin" id="course-edit-tab">

                            <li>

                                <div class="row">
                                    <div class="col-xl-9 m-auto">


                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="course_title">Nome do Curso<span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter course title" value="Learn CSS Fundamentals ..." required="">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="short_description">
                                                Descrição</label>
                                            <div class="col-md-9">
                                                <textarea name="short_description" id="short_description" class="form-control"> CSS</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="course_title"> Categoria <span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <select class="selectpicker">
                                                    <option data-icon="uil-android-alt" selected=""> Mobile App </option>
                                                    <option data-icon="uil-bag-alt">Business</option>
                                                    <option data-icon="uil-palette">Desings</option>
                                                    <option data-icon="uil-camera">Photography</option>
                                                    <option data-icon="uil-medkit">Health Fitness</option>
                                                </select>

                                            </div>
                                        </div>



                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="course_title"> Nível <span class="required">*</span></label>
                                            <div class="col-md-9">

                                                <select class="selectpicker">
                                                    <option value=""> Beginner </option>
                                                    <option value="1"> Intermediate </option>
                                                    <option value="2"> Advanced</option>
                                                </select>

                                            </div>
                                        </div>


                                    </div>
                                </div>


                            </li>

                            <li>


                                <div class="row">
                                    <div class="col-xl-10 m-auto">
                                        <ul class="c-curriculum" uk-accordion="">
                                            <li class="uk-open">
                                                <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                                    </i>Section titile 1</a>
                                                <div class="action-btn">
                                                    <a href="#"> <i class="uil-plus">  </i> Add Lacture </a>
                                                    <a href="#"> <i class="uil-plus">  </i> Add link </a>
                                                    <a href="#"> <i class="uil-plus">  </i>  Add quiz </a>
                                                </div>
                                                <div class="uk-accordion-content">
                                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                                    </i>Section titile 2</a>
                                                <div class="action-btn">
                                                    <a href="#"> <i class="uil-plus">  </i> Add Lacture </a>
                                                    <a href="#"> <i class="uil-plus">  </i> Add link </a>
                                                    <a href="#"> <i class="uil-plus">  </i>  Add quiz </a>
                                                </div>
                                                <div class="uk-accordion-content">
                                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                                    </i>Section titile 3 </a>
                                                <div class="action-btn">
                                                    <a href="#"> <i class="uil-plus">  </i> Add Lacture </a>
                                                    <a href="#"> <i class="uil-plus">  </i> Add link </a>
                                                    <a href="#"> <i class="uil-plus">  </i>  Add quiz </a>
                                                </div>
                                                <div class="uk-accordion-content">
                                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="uk-accordion-title" href="#"> <i class="uil-folder">
                                                    </i>Section titile 4</a>
                                                <div class="action-btn">
                                                    <a href="#"> <i class="uil-plus">  </i> Add Lacture </a>
                                                    <a href="#"> <i class="uil-plus">  </i> Add link </a>
                                                    <a href="#"> <i class="uil-plus">  </i>  Add quiz </a>
                                                </div>
                                                <div class="uk-accordion-content">
                                                    <ul class="sec-list" uk-sortable="handle: .uk-sortable-handle">
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sec-list-item">
                                                                <div> <i class="uil-list-ul uk-sortable-handle"></i>
                                                                    <label class="mb-0 mx-2">
                                                                        <input class="uk-checkbox" type="checkbox">
                                                                    </label>
                                                                    <p> Course Simple Content   </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-act"> <a href="#">
                                                                        <i class="uil-cloud-download"></i></a>
                                                                        <a href="#"><i class="uil-eye"></i></a>
                                                                        <a href="#"><i class="icon-feather-x"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>


                                        </ul>


                                    </div>
                                </div>

                            </li>

                            <li>

                                <div class="row justify-content-center">
                                    <div class="col-xl-9">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="website_keywords">Meta
                                                keywords</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control bootstrap-tag-input" id="meta_keywords" name="meta_keywords" data-role="tagsinput" style="width: 100%; display: none;">
                                                <div class="bootstrap-tagsinput"><input size="1" type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-xl-9">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="meta_description">Meta
                                                description</label>
                                            <div class="col-md-9">
                                                <textarea name="meta_description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>


                            </li>

                            <li>


                                <script type="text/JavaScript">
                                    function createNewElement() {
                            // First create a DIV element.
                            var txtNewInputBox = document.createElement('div');

                            // Then add the content (a new input box) of the element.
                            txtNewInputBox.innerHTML = "<input type='text' class='uk-input'>";

                            // Finally put it where it is supposed to appear.
                            document.getElementById("newElementId").appendChild(txtNewInputBox);
                        }
                        </script>

                                <div class="row justify-content-center">
                                    <div class="col-xl-9">

                                        <button class="btn btn-default mb-3" onclick="createNewElement();"> <i class='uil-plus'></i> Requirements </button>

                                        <div id="newElementId"> </div>

                                        <input type='text' class='uk-input' placeholder="Any computer will work: Windows, macOS or Linux">
                                        <input type='text' class='uk-input' placeholder="Basic programming HTML and CSS.">
                                        <input type='text' class='uk-input' placeholder="Basic/Minimal understanding of JavaScript">
                                    </div>
                                </div>
                            </li>

                            <li>

                                <div class="row justify-content-center">

                                    <div class="col-xl-9">

                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label">Preço ($)</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Digite o Preço">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xl-9">

                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label">Desconto
                                                 ($)</label>
                                            <div class="col-md-9">
                                                <input class="form-control">
                                                <small class="text-muted">Situação <span class="text-danger">10%</span> </small>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </li>

                            <li>

                                <div class="row">
                                    <div class="col-12 my-lg-5">
                                        <div class="text-center">
                                            <h2 class="mt-0"><i class="icon-feather-check-circle text-success"></i></h2>
                                            <h3 class="mt-0">Thank you !</h3>

                                            <p class="w-75 mb-2 mx-auto"> Submeter o Curso para Revisão   </p>

                                            <div class="mb-3 mt-3">
                                                <button type="button" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>


                            </li>

                        </ul>

                    </div>

                </div>
@endsection
