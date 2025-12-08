<link rel="stylesheet" href="{{ asset('assets/css') }}">

<div class="container-fluid px-0 bg-info text-black p-4 pt-1 rounded">
    
    <h3 class="text-dark fw-bold text-center my-3">
        Academics <span class="text-dark mx-2">|</span> Programmes
    </h3>

    <div class="row justify-content-center mx-0 g-4">

        <!-- Course 1 -->
        <div class="col-md-5 col-10 mb-3">
            <a href="{{ route('school.pptt') }}" class="text-decoration-none text-black">
                <div class="course-box h-100">
                    <h5 class="mb-2">Perioperative Theatre Technology</h5>
                    <p class="text-muted mb-0">
                        Covers surgical procedures, theatre management, sterilization,
                        and assisting surgeons in the operating room.
                    </p>
                </div>
            </a>
        </div>

        <!-- Course 2 -->
        <div class="col-md-5 col-10 mb-3">
            <div class="course-box h-100">
                <h5 class="fw-bold mb-2">Orthopedics & Trauma Medicine</h5>
                <p class="text-muted mb-0">
                    Focuses on musculoskeletal injuries, trauma care,
                    orthopedic conditions, and rehabilitation techniques.
                </p>
            </div>
        </div>

        <!-- Course 3 -->
        <div class="col-md-5 col-10 mb-3">
            <div class="course-box h-100">
                <h5 class="fw-bold mb-2">Certified Nurse Assistant</h5>
                <p class="text-muted mb-0">
                    Trains students in patient care skills, nursing procedures,
                    and healthcare support techniques.
                </p>
            </div>
        </div>

        <!-- Course 4 -->
        <div class="col-md-5 col-10 mb-3">
            <div class="course-box h-100">
                <h5 class="fw-bold mb-2">Computer Packages</h5>
                <p class="text-muted mb-0">
                    Learn essential computer applications including MS Office,
                    typing, data entry, and basic ICT skills.
                </p>
            </div>
        </div>

    </div>

    <div class="text-center mt-3">
        <a href="{{ route('academic.programs') }}" class="btn btn-outline-primary btn-sm mt-3 px-5  py-1 w-auto d-inline-block rounded-pill fs-4">
            Read More
        </a>
    </div>

</div>
