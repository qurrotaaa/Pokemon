<style>
  .side-back{
    background-image: url(image/sidebar.jpg);
  }
</style>
<div class="sidebar" id="sidebar">
  <div class="side-back"></div>
    <div class="sidebar-top">
        <div class="sidebar-top-logo">
            <img src="image/th 1.svg" class="sidebar-logo">
            <img src="icon/x.svg" class="icon sidebar-x" id="btn1">
        </div>
        <img src="icon/menu.png" class="icon sidebar-menu" id="btn2">
    </div>
    <div class="sidebar-body">
      <hr>
      <ul>
        <li>
          <a href="home.php">
            <span><img src="icon/home.png" class="icon sidebar-home"></span>
            <span class="text">Home</span>
          </a>
        </li>
        <li>
          <a href="pokedex.php">
            <span><img src="icon/game.png" class="icon sidebar-pokedex"></span>
            <span class="text">Pokedex</span>
          </a>
        </li>
        <li>
          <a href="">
            <span><img src="icon/icons8-pokemon-32 2.svg" class="icon sidebar-teamplanner"></span>
            <span class="text">Team Planner</span>
          </a>
        </li>
        <li>
          <a href="manage.php">
            <span><img src="icon/vector.svg" class="icon sidebar-usermanagement"></span>
            <span class="text">User Management</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-foot">
      <ul>
        <li>
          <a href="">
            <span><img src="icon/user.png" class="icon sidebar-profile"></span>
            <span class="text">Profile</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <span><img src="icon/icons8-logout-64 1.svg" class="icon sidebar-logout"></span>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </div>
</div>
<script>
  let btn1=document.querySelector('#btn1')
  let btn2=document.querySelector('#btn2')
  let sidebar=document.querySelector('.sidebar')

  btn1.onclick = function (){
    sidebar.classList.toggle('active');
  };

  btn2.onclick = function (){
    sidebar.classList.toggle('active');
  };
</script>


<!-- <div class="sidebar" id="sidebar">
  <div class="top">
    <div class="logo">
      <a href="/dashboard">
        <img src="/img/connected.png" class="side-img">
        <span class="side-logo">Connected</span>
      </a>
    </div>
    <ion-icon name="menu-outline" id="btn"></ion-icon>
  </div>
  <div class="user">
    <a href="/users/{{ auth()->user()->id }}">
      @if (auth()->user()->image)
        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="foto_project" class="user-img"> 
      @else
        <img src="https://source.unsplash.com/1200x400?profil" alt="" class="user-img">
      @endif
      <div class="role">
        <p class="text {{ Request::is('dashboard/categories*') ? '' : 'text-black' }}">{{ auth()->user()->name }}</p>
        <p class="text {{ Request::is('dashboard/categories*') ? '' : 'text-black' }}">{{ auth()->user()->role }}</p>
      </div>
    </a>
  </div>
<div class="sidebar-nav">
  <ul>
    <li>
      <a href="/dashboard">
        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
        <span class="text">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    @can('owner')
    <li>
      <a href="/projects/create">
      <span class="icon"><ion-icon name="duplicate-outline"></ion-icon></span>
      <span class="text {{ Request::is('dashboard') ? '' : 'text-black' }}">Project</span>
      </a>
      <span class="tooltip">Project</span>
    </li>
    <li>
      <a href="/users">
      <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
      <span class="text {{ Request::is('dashboard') ? '' : 'text-black' }}">User Management</span>
      </a>
      <span class="tooltip">User Management</span>
    </li>
    @endcan
    <li>
      <a href="#" onclick="logout()" class="logout">
        <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
        <span class="text">Logout</span>
      </a>
      <form id="logout-form" action="/logout" method="post" style="display: none;">
          @csrf
      </form>
      <span class="tooltip">Logout</span>
    </li> 
  </ul>
 </div>
 <div class="projectlist">
    <p id="projectlist">Project Lists</p>
 @foreach ($projects as $project)
        <ul class="side flex-column">
            <li class="side-item">
                <a class="nav-link" href="/projects/{{ $project->id }}/tasks">
                    {{ $project->nama_project }}
                </a>
            </li>
        </ul>
        @endforeach
 </div>
 </div>
<script>
  let btn=document.querySelector('#btn')
  let sidebar=document.querySelector('.sidebar')
  let projectlist=document.querySelector('#projectlist')

  btn.onclick = function (){
    sidebar.classList.toggle('active');
  };

  projectlist.onclick = function(){
    sidebar.classList.toggle('active');
  }

</script>

<script>
  function logout() {
      event.preventDefault(); // Mencegah pengaruh bawaan dari tag <a>
      document.getElementById('logout-form').submit();
  }
</script> -->