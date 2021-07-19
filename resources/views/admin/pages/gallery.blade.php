@extends('layouts.app')


@section('main-content')
    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')

            <div id="content">
                <div class="container">

                    <div class="admin-wrap">
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form class="select-media">
                                        <div class="">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>All media</option>
                                                <option>Images</option>
                                                <option>Videos</option>
                                                <option>Audios</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4" align="right">
                                    <div class="head-action">
                                        <form class="search-f-box">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="" placeholder="Search">
                                                </div>
                                                <div class="col-auto">
                                                    <img class="search-icon img-fluid" src="../img/icons/search-icon.svg">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-2" align="center">
                                    <div class="head-action">
                                        <h2><img src="../img/icons/admin/delete.svg">Deleted (0)</h2>
                                    </div>
                                </div>
                                <div class="col-lg-2" align="right">
                                    <button class="btn btn-warning"><img src="../img/icons/admin/upload.svg">Upload</button>
                                </div>
                            </div>
                        </div>
                        <div class="admin-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="category-style">

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/1.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/2.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/3.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/4.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/5.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/6.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/7.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/8.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/9.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/10.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/11.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/12.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/13.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/14.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/15.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/1.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/2.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/3.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/4.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/5.webp">
                                            </div>
                                        </a>

                                        <a href={{ url('gallery2') }}>
                                            <div class="category-style-wrap">
                                                <img src="../img/categories/6.webp">
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pagination-container">
                        <nav aria-label="Page navigation">
                            <ul class="pagination custom-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">
                                        &#60;</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
