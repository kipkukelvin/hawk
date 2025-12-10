@extends('partials.layouts')

@section('title', 'Mission, Vission and Core Values - Siloam College')

 @section('content')
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <div class="class-name text-start">
     <h1 class="class-name mb-2 mt-5 text-capitalize text-center">About Us</h1>
      <span style="display:block; width:60px; height:2px; background:#0dcaf0; margin:5px auto 0;"></span>
    <h2 class="class-name mb-2 mt-5 text-capitalize text-center">welcome to siloam medical, tehnical, and commercial training college.</h2>
        <span style="display:block; width:200px; height:2px; background:#0dcaf0; margin:5px auto 0;"></span>
     <h3 class="mb-4 mt-4 text-start fs-5 text-muted">Siloam College operates with the explicit mandate to prepare world-class healthcare professionals who will transform healthcare systems, both locally and globally. We fulfill this mandate by dedicating our resources to delivering innovative education and training programs, cultivating compassionate leaders ready to drive positive community health outcomes.</h3>
      <div class="bg-info text-white py-2 rounded">
      <p class="class-name text-center lead text-center fw-bold fs-4 m-0">
Mission, Vission, and Core Values.
    </p>
    </div>
<div class="my-4"></div>
    <h3 class="class-name text-center fs-1 fw-bold">Vision</h3>
  <p>To prepare world-class healthcare professionals committed to transforming healthcare locally and everywhere.</p>

    <h3 class="class-name text-center fs-1 fw-bold">Mission</h3>
    <p>To empower students with innovative healthcare education that develops expertise, compassion, and leadership, preparing them to excel in their professionals and improve lives everywhere.</p>
  <h3 class="class-name text-center fs-1 fw-bold">Core Values</h3>
    <UL class="text-capitalize" style="list-style-type: circle;list-style-position: inside;" >
      <li>
Excellence
      </li>
      <li>
        Compassion
      </li>
      <li>
        Integrity
      </li>
      <li>
        innovation
      </li><li>
        collaboration
      </li>
      <li>
        lifelong learning
      </li>
      <li>
        service to humanity
      </li>
    </UL>
<div class="container my-5 p-0">
  <div class="row g-0">

    <div class="col-md-6">
      <img src="{{ asset('assets/img/sss.jpg') }}" 
           class="w-100 h-100" 
           style="object-fit: cover;" 
           alt="">
    </div>

    <div class="col-md-6 p-4">
      <h2>Student Support.</h2>
      <p>The institution is committed to fostering a supportive and inclusive learning environment by providing comprehensive Student Support Services (SSS) designed to promote the overall well-being, personal development, and academic success of all students. Our dedicated SSS department offers a range of confidential resources and professional assistance, including individualized counseling for personal, career, and academic matters; mental health support; academic advising and tutoring; and assistance with financial aid and accommodation services. The primary goal of these services is to help students navigate challenges, develop essential life skills (such as time management and study habits), and access necessary resources, thereby optimizing their opportunities for personal growth and successful academic progression throughout their time here.</p>
    </div>

  </div>
</div>
  </div>
  @endsection