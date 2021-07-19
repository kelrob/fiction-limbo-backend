@extends('layouts.app')

@section('main-content')


    <section id="admin-btm">
        <div class="wrapper">
            @include('admin.includes.sidebar')
            <!-- main page content -->
            <div id="content">
                <div class="container">
                    <div class="admin-wrap">
                        <div class="admin-head">
                            <div class="row">
                                <div class="col-lg-7" align="right">
                                    <h2><span><a href={{ url('users') }}>All (493,442)</a></span> | <span><a
                                                class="active-inner" href={{ url('users-restricted') }}>Restricted
                                                (200)</a></span>
                                        | <span><a href={{ url('users-verified') }}>Verified (400)</a></span></h2>
                                </div>
                                <div class="col-lg-5">
                                    <form class="search-f-box">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Search by Name or Username">
                                            </div>
                                            <div class="col-auto">
                                                <img class="search-icon img-fluid" src="../img/icons/search-icon.svg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Page Table -->
                        <div class="admin-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="numbering" scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Restricted</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><span><a href="user-details.html">Mark James</a></span></td>
                                        <td>James234</td>
                                        <td>markjames@gmail.com</td>
                                        <td>11-04-2021</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td><span><a href="user-details.html">Jacob Okwoho</a></span></td>
                                        <td>Thornton</td>
                                        <td>okwohoJ@gmail.com</td>
                                        <td>15-06-2021</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td><span><a href="user-details.html">Larry Walker</a></span></td>
                                        <td>larrywalker2</td>
                                        <td>larryw@gmail.com</td>
                                        <td>19-09-2021</td>
                                    </tr>
                                </tbody>
                            </table>
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
