@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Eigentum</title>
    <link rel="stylesheet" href="/css/pages/subscribe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="oii">
    <div class="content">
      <div class="card one">
        <div class="top">
          <div class="title">Basic</div>
          <div class="price-sec">
            <span class="dollar">Rp.</span>
            <span class="price">50</span>
            <span class="decimal">.000/bln</span>
          </div>
        </div>
        <div class="info">Fitur terbatas yang akan Anda dapatkan dalam paket ini</div>
        <div class="details">
          <div class="one">
            <span>Memiliki 2 Agent Properti</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Notifikasi email real-time tentang properti baru.</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Upload Konten Terbatas</span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>Update terbatas tentang tren pasar properti.</span>
            <i class="fas fa-times"></i>
          </div>
          <button>Langganan</button>
        </div>
      </div>
      <div class="card two">
        <div class="top">
          <div class="title">Extended</div>
          <div class="price-sec">
            <span class="dollar">Rp</span>
            <span class="price">70</span>
            <span class="decimal">.000/bln</span>
          </div>
        </div>
        <div class="info">Hanya beberapa fitur yang akan Anda dapatkan pada paket ini</div>
        <div class="details">
          <div class="one">
            <span>Memiliki 2 Agent Properti</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Notifikasi email real-time tentang properti baru.</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Upload Konten Terbatas</span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>Update terbatas tentang tren pasar properti.</span>
            <i class="fas fa-times"></i>
          </div>
          <button>Langganan</button>
        </div>
      </div>
      <div class="card three">
        <div class="top">
          <div class="title">Premium</div>
          <div class="price-sec">
            <span class="dollar">Rp.</span>
            <span class="price">100</span>
            <span class="decimal">.000/bln</span>
          </div>
        </div>
        <div class="info">Semua fitur akan Anda dapatkan pada paket ini</div>
        <div class="details">
          <div class="one">
            <span>Memiliki 2 Agent Properti</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Notifikasi email real-time tentang properti baru.</span>
            <i class="fas fa-check"></i>
          </div>
          <div class="one">
            <span>Upload Konten Terbatas</span>
            <i class="fas fa-times"></i>
          </div>
          <div class="one">
            <span>Update terbatas tentang tren pasar properti.</span>
            <i class="fas fa-times"></i>
          </div>
          <button>Langganan</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


@endsection