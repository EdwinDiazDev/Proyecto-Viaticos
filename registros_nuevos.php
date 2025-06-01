<?php include("encabezado.php"); ?>

<style>

  /* MAIN CONTENT */
  .grid {
    display: flex;
    justify-content: center; /* Centra horizontalmente */
    align-items: center; /* Centra verticalmente */
    padding: 50px;
    flex-wrap: wrap;
    gap: 3rem;
  }

  .grid__item {
    flex: 0 0 calc(25% - 3rem); /* Ancho específico, mínimo de 20%, teniendo en cuenta el espacio entre elementos */
    background-color: #fff;
    border-radius: 0.4rem;
    overflow: hidden;
    box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: 0.2s;
  }

  .grid__item:hover {
    transform: translateY(-0.5%);
    box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
  }

  .card__img {
    display: block;
    width: 100%;
    height: 8rem; /* Ajusta la altura según tus necesidades */
    object-fit: cover;
  }

  .card__content {
    padding: 1rem;
  }

  .card__header {
    font-size: 1.3rem;
    font-weight: 500;
    color: $color-header;
    margin-bottom: 1rem;
  }

  .card__text {
    font-size: 0.7rem;
    letter-spacing: 0.1rem;
    line-height: 1.5;
    color: darken($color-text, 1%);
    margin-bottom: 1.5rem;
  }

  .card__btn {
    display: block;
    margin: 0 auto;
    width: 70%;
    padding: 0.5rem;
    font-size: 1rem;
    text-align: center;
    color: $color-btn-text;
    background-color: $color-btn-background;
    border: none;
    border-radius: 0.4rem;
    transition: 0.2s;
    cursor: pointer;
  }

  .card__btn span {
    margin-left: 0.5rem;
    transition: 0.2s;
  }

  .card__btn:hover, .card__btn:active {
    background-color: darken($color-btn-background, 2%);
  }

  .card__btn:hover span {
    margin-left: 1rem;
  }
</style>

<div class="grid">
  <div class="grid__item">
    <div class="card">
      <img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Snowy Mountains">
      <div class="card__content">
        <h1 class="card__header">Registrar Pais</h1>
        <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen.</p>
        <a href="form_pais.php"><button class="card__btn">Explorar <span>&rarr;</span></button></a>
      </div>
    </div>
  </div>

  <div class="grid__item">
    <div class="card">
      <img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Snowy Mountains">
      <div class="card__content">
        <h1 class="card__header">Registrar Estado</h1>
        <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen.</p>
        <a href="form_estado.php"><button class="card__btn">Explorar <span>&rarr;</span></button></a>
      </div>
    </div>
  </div>

  <div class="grid__item">
    <div class="card">
      <img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Snowy Mountains">
      <div class="card__content">
        <h1 class="card__header">Registrar Ciudad</h1>
        <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen.</p>
        <a href="form_ciudad.php"><button class="card__btn">Explorar <span>&rarr;</span></button></a>
      </div>
    </div>
  </div>

  <div class="grid__item">
    <div class="card">
      <img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Snowy Mountains">
      <div class="card__content">
        <h1 class="card__header">Registrar Banco</h1>
        <p class="card__text">Look up at the night sky, and find yourself <strong>immersed</strong> in the amazing mountain range of Aspen.</p>
        <a href="form_banco.php"><button class="card__btn">Explorar <span>&rarr;</span></button></a>
      </div>
    </div>
  </div>
  
  <!-- Repite la estructura para otros elementos de la cuadrícula -->
</div>

<?php include("pie.php"); ?>
