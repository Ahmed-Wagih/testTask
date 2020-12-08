<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    </head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <body>
        <div class="overlay"></div>
        <div class="flex-center position-ref full-height">
            <div class="card-deck">
                <div class="container">
                    <div class="row">
                        @foreach($doctors as $doctor)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="doctor-image text-center">
                                        <img class="card-img-top" src="{{Storage::url('doctors/'.$doctor->image)}}" alt="{{$doctor->name}}">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Dr. {{$doctor->name}}</h5>
                                        <p class="card-text">{{$doctor->bio}}</p>
                                        <p class="card-text">
                                            <span>(266 تقييم)</span>
                                            <span>4.75</span>
                                            <span class="fa fa-star {{$doctor->total_rate>=1?'checked':''}}"></span>
                                            <span class="fa fa-star {{$doctor->total_rate>=2?'checked':''}}"></span>
                                            <span class="fa fa-star {{$doctor->total_rate>=3?'checked':''}}"></span>
                                            <span class="fa fa-star {{$doctor->total_rate>=4?'checked':''}}"></span>
                                            <span class="fa fa-star {{$doctor->total_rate>=5?'checked':''}}"></span>
                                        </p>
                                        <p class="card-text">{{$doctor->bio}}</p>
                                        <div class="row">
                                            <div class="col-6">{{$doctor->sessions}} جلسة <i class="fas fa-play"></i></div> 

                                            <div class="col-6">
                                                {{$doctor->price}}  جنيه <i class="fa fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <div class="row m-0 p-0">
                                            <div class="col-6 m-0 p-0"> <a href="#" class="view-btn btns d-block ">عرض الصفحة الشخصية</a></div>
                                            <div class="col-6 m-0 p-0"><a id="bookNow" data-doctor="{{$doctor->id}}" href="#" class="book-btn btns d-block ">احجز الأن</a></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div id="appointment{{$doctor->id}}" class="doctor-appointment">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row m-0 p-0">
                                            <div class="col-10 m-0 p-0 text-center">
                                                <h5 class="card-title">Dr. {{$doctor->name}}</h5>
                                                <p class="card-text">{{$doctor->bio}}</p>
                                                <p class="card-text">
                                                    <span>(266 تقييم)</span>
                                                    <span>4.75</span>
                                                    <span class="fa fa-star {{$doctor->total_rate>=1?'checked':''}}"></span>
                                                    <span class="fa fa-star {{$doctor->total_rate>=2?'checked':''}}"></span>
                                                    <span class="fa fa-star {{$doctor->total_rate>=3?'checked':''}}"></span>
                                                    <span class="fa fa-star {{$doctor->total_rate>=4?'checked':''}}"></span>
                                                    <span class="fa fa-star {{$doctor->total_rate>=5?'checked':''}}"></span>
                                                </p>
                                                <p class="card-text">{{$doctor->bio}}</p>
                                                <div class="row">
                                                    <div class="col-6">{{$doctor->sessions}} جلسة <i class="fas fa-play"></i></div> 
        
                                                    <div class="col-6">
                                                        {{$doctor->price}}  جنيه <i class="fa fa-money-bill-alt"></i>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-2 m-0 p-0"><img  src="{{Storage::url('doctors/'.$doctor->image)}}" alt=""></div>

                                        </div> 
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6"><a class="calender">Calender</a></div>
                                            <div class="col-md-6"><a class="week">This Week</a></div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <h4 class="text-center">Appointment here</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="m-1 p-1 text-center">
                            {{ $doctors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
