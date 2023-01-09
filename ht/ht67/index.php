<!-- HTML -->
<style>

/* CSS */
.carousel {
    position: relative;
  }
  
  .carousel-inner {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
  }
  
  .carousel-inner img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
  }
  
  .carousel-control-prev,
  .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2em;
    color: #000;
  }
  
  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    color: #00f;
    text-decoration: none;
  }
  
  .carousel-control-prev {
    left: 0;
  }
  
  .carousel-control-next {
    right: 0;
  }
  </style>
  
<div class="carousel">
    <div class="carousel-inner">
      <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.klook.com%2Ffr%2Factivity%2F2907-img-worlds-of-adventure-dubai%2F&psig=AOvVaw3LLeAsK57E1WemkRh8gItz&ust=1670673437595000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCICwrNy97PsCFQAAAAAdAAAAABAD" alt="Image 1" />
      <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fimg&psig=AOvVaw3LLeAsK57E1WemkRh8gItz&ust=1670673437595000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCICwrNy97PsCFQAAAAAdAAAAABAI" alt="Image 2" />
      <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ffr.tripadvisor.be%2FAttraction_Review-g295424-d10687494-Reviews-IMG_Worlds_of_Adventure-Dubai_Emirate_of_Dubai.html&psig=AOvVaw3LLeAsK57E1WemkRh8gItz&ust=1670673437595000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCICwrNy97PsCFQAAAAAdAAAAABAQ" alt="Image 3" />
    </div>
    <a class="carousel-control-prev" href="#">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
