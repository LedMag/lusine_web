<header class="header">
  <div class="header__logo">
    <a data-url="home">
      <img src="/images/logo.png" alt="Logo" class="header__img">
    </a>
  </div>
  <div class="header__buttons">
    <button class="header__button btn" data-lang="es">es</button>
    <button class="header__button btn" data-lang="en">en</button>
    <button class="header__button btn active" data-lang="ru">ru</button>
  </div>
  <nav class="header__nav spr">
    <ul class="header__menu spr-inner">
      <li class="header__item">
        <a href="{{ url('/home')}}" class="header__link">{{ __("header.nav.home") }}</a>
      </li>
      <li class="header__item">
        <a href="{{ url('/category')}}" class="header__link">{{ __("header.nav.category") }}</a>
      </li>
      <li class="header__item">
        <a href="{{ url('/about')}}" class="header__link">{{ __("header.nav.about") }}</a>
      </li>
      <li class="header__item">
        <a href="{{ url('/contacts')}}" class="header__link">{{ __("header.nav.contacts") }}</a>
      </li>
    </ul>
  </nav>
</header>