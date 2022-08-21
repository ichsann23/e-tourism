   <nav class="row navbar navbar-expand-lg navbar-light bg-light">
       <a href="{{ url('/') }}" class="navbar-brand"> E-tourism </a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navb">
           <ul class="navbar-nav ml-auto mr-3">
               <li class="nav-item mx-md-2"><a href="{{ url('/') }}" class="nav-link active">Beranda</a></li>
               <li class="nav-item mx-md-2"><a href="{{ url('/penginapan') }}" class="nav-link">Penginapan</a></li>
               <li class="nav-item mx-md-2"><a href="{{url('/transportasi')}}" class="nav-link">Transportasi</a></li>
               <li class="nav-item mx-md-2"><a href="{{ url('virtual-tour') }}" class="nav-link">Virtual Tour</a></li>
           </ul>
       </div>
   </nav>
