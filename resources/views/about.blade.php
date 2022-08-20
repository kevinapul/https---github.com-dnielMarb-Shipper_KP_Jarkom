@extends('layouts.main')

@section('container')
   
   <h1>Halaman About</h1>
    <!-- Syntax ini sama saja, hanya saja lebih dipermudah karena sudah memakai blade -->
    <!-- <h3><?php echo $name;  ?></h3> -->
    <h3>{{ $name }}</h3>
    <!-- <p><?php echo $email; ?></p>  -->
    <p>{{ $email }}</p>
    <!-- <img src="img/<?php echo $email; ?>" alt=" Gambar <?php echo $name;  ?>"> -->
    <img src="img/{{ $image }}" alt=" Gambar {{$name}}" width="200" class="img-thumbnail rounded-pill">

@endsection