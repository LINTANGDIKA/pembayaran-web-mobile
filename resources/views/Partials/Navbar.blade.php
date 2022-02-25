<nav class="navbar navbar-light bg-light pb-0">
    <div class="container-fluid ">
        <div class="navbar-brand d-flex">
            <a href="/">
                <img src="{{ url('logo/logo1.png') }}" alt="" class="logoNavbar">
            </a>
            <p class=" teks my-auto">Payment Mobile Web</p>
        </div>
        <div class="dropdown">
            <div class=" dropdown-toggle teks1" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ $email }}
            </div>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @if ($role == 'admin')
                <li><a class="dropdown-item" href="/pwb/logout"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</a></li>
                @else
                @if ($title == 'History Page')
                <li><a class="dropdown-item" href="/"><i class="bi bi-house-fill"></i>&nbsp;Back To Home</a></li>
                @else
                <li><a class="dropdown-item" href="/history"><i class="bi bi-clock-history"></i>&nbsp;History
                        Transaction</a></li>
                @endif
                @if ($title == 'Profile Page')
                <li><a class="dropdown-item" href="/"><i class="bi bi-house-fill"></i>&nbsp;Back To Home</a></li>
                @else
                <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i>&nbsp;Profile</a></li>
                @endif
                <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
