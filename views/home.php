<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirPods Max</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <nav class="py-3 bg-white border-bottom sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-bars icono-menu"></i>
                <a href="#galeria" class="text-decoration-none text-secondary small link-nav">Novedades</a>
            </div>
            <div>
                <a href="index.php" class="text-dark text-decoration-none fw-bold fs-4">A</a>
            </div>
            <div>
                <a href="https://wa.me/573143389750" target="_blank" class="text-decoration-none text-secondary small link-nav">+57 314 3389750</a>
            </div>
        </div>
    </nav>

    <section class="fondo-gris-hero py-5 overflow-hidden">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 position-relative text-center">
                    <div class="letras-fondo">Air<br>Pods<br>Max</div>
                    <img src="assets/img/airpods-hero.png" alt="AirPods Max" class="img-fluid img-principal">
                </div>
                <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                    <p class="text-secondary small mb-2">Audio espacial personalizado con seguimiento dinámico de la cabeza</p>
                    <h1 class="titulo-hero fw-bold mb-3">Air<br>Pods<br>Max</h1>
                    <p class="text-secondary small texto-corto mb-4">
                        Presentamos los AirPods Max: el equilibrio perfecto entre un audio de alta fidelidad increíble y la magia sin esfuerzo de los AirPods
                    </p>
                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <img src="assets/img/airpods-side.png" alt="AirPods Lateral" class="img-secundaria d-none d-md-block">
                        <a href="#modelos" class="boton-redondo">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="modelos" class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-12 col-lg-5">
                    <div class="bloque-gris p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <h2 class="fw-normal mb-3">¿Cuáles AirPods son<br>ideales para ti?</h2>
                            <p class="text-secondary small mb-4">Más modelos de AirPods</p>
                            <ul class="list-unstyled text-secondary small">
                                <li class="mb-2">• AirPods Max</li>
                                <li class="mb-2">• AirPods 1.ª generación</li>
                                <li class="mb-2">• AirPods Pro 2.ª generación</li>
                                <li class="mb-2">• AirPods 3.ª generación</li>
                            </ul>
                        </div>
                        <div class="text-end mt-4">
                            <a href="#catalogo" class="boton-redondo">Más</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row align-items-center g-3 tarjeta-item p-3">
                                <div class="col-6 col-sm-5 text-center bloque-gris p-3">
                                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-skyblue-202011?wid=470&hei=556&fmt=png-alpha" alt="AirPods Azul" class="img-fluid img-catalogo">
                                </div>
                                <div class="col-6 col-sm-7 ps-sm-4">
                                    <h5 class="fw-normal mb-3">AirPods Max Azul</h5>
                                    <p class="fw-bold fs-5 mb-3">549$</p>
                                    <a href="#contacto" class="text-dark text-decoration-none small link-flecha">Más <span class="ms-2">→</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row align-items-center g-3 tarjeta-item p-3">
                                <div class="col-6 col-sm-5 text-center bloque-gris p-3">
                                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-green-202011?wid=470&hei=556&fmt=png-alpha" alt="AirPods Verde" class="img-fluid img-catalogo">
                                </div>
                                <div class="col-6 col-sm-7 ps-sm-4">
                                    <h5 class="fw-normal mb-3">AirPods Max Verde</h5>
                                    <p class="fw-bold fs-5 mb-3">549$</p>
                                    <a href="#contacto" class="text-dark text-decoration-none small link-flecha">Más <span class="ms-2">→</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="py-5 bloque-gris">
        <div class="container">
            <h3 class="text-center fw-normal mb-4">Todas las ediciones</h3>
            <div class="swiper swiperAirpods py-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white p-4 text-center tarjeta-item">
                            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-silver-202011?wid=470&hei=556&fmt=png-alpha" class="img-fluid img-slide" alt="Plata">
                            <h6 class="mt-3">AirPods Max Plata</h6>
                            <p class="text-secondary small mb-0">549$</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 text-center tarjeta-item">
                            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-spacegray-202011?wid=470&hei=556&fmt=png-alpha" class="img-fluid img-slide" alt="Gris Espacial">
                            <h6 class="mt-3">AirPods Max Gris Espacial</h6>
                            <p class="text-secondary small mb-0">549$</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 text-center tarjeta-item">
                            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-pink-202011?wid=470&hei=556&fmt=png-alpha" class="img-fluid img-slide" alt="Rosa">
                            <h6 class="mt-3">AirPods Max Rosa</h6>
                            <p class="text-secondary small mb-0">549$</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-4 text-center tarjeta-item">
                            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-skyblue-202011?wid=470&hei=556&fmt=png-alpha" class="img-fluid img-slide" alt="Azul">
                            <h6 class="mt-3">AirPods Max Azul</h6>
                            <p class="text-secondary small mb-0">549$</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-3"></div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-12 col-md-4">
                    <div class="p-4 bloque-gris h-100 tarjeta-item">
                        <i class="fa-solid fa-headphones fs-2 mb-3"></i>
                        <h5>Audio Espacial</h5>
                        <p class="small text-secondary mb-0">Sonido envolvente como en el cine desde cualquier dirección.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-4 bloque-gris h-100 tarjeta-item">
                        <i class="fa-solid fa-volume-xmark fs-2 mb-3"></i>
                        <h5>Cancelación de Ruido</h5>
                        <p class="small text-secondary mb-0">Cancelación activa de ruido profesional que bloquea el sonido externo.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-4 bloque-gris h-100 tarjeta-item">
                        <i class="fa-solid fa-battery-three-quarters fs-2 mb-3"></i>
                        <h5>20 h de Batería</h5>
                        <p class="small text-secondary mb-0">Hasta 20 horas de reproducción de música, películas o llamadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="catalogo" class="py-5 bg-white border-top">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-4 g-3">
                <div class="col-12 col-md-6">
                    <h4 class="fw-normal mb-0">Modelos disponibles</h4>
                </div>
                <div class="col-12 col-md-6">
                    <form action="index.php" method="GET" class="d-flex gap-2">
                        <input type="hidden" name="action" value="buscar">
                        <input type="text" name="q" class="form-control form-control-sm" placeholder="Buscar modelo...">
                        <button type="submit" class="btn btn-dark btn-sm">Buscar</button>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle small">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Modelo</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listaProductos)): ?>
                            <?php foreach ($listaProductos as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['nombre'] ?></td>
                                    <td><?= $item['categoria'] ?></td>
                                    <td><?= $item['precio'] ?>$</td>
                                    <td>
                                        <a href="index.php?action=eliminar&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td>1</td>
                                <td>AirPods Max Blanco</td>
                                <td>Diadema</td>
                                <td>549$</td>
                                <td><a href="index.php?action=eliminar&id=1" class="btn btn-outline-danger btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>AirPods Max Azul</td>
                                <td>Diadema</td>
                                <td>549$</td>
                                <td><a href="index.php?action=eliminar&id=2" class="btn btn-outline-danger btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>AirPods Max Verde</td>
                                <td>Diadema</td>
                                <td>549$</td>
                                <td><a href="index.php?action=eliminar&id=3" class="btn btn-outline-danger btn-sm">Eliminar</a></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="contacto" class="bloque-gris py-5 position-relative overflow-hidden">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center mb-4">
                    <h3 class="fw-normal">¿Difícil elegir?</h3>
                    <h4 class="fw-normal">¡Estamos listos para ayudarte!</h4>
                </div>
                <div class="col-12 col-lg-7">
                    <form action="views/gracias.php" method="POST" class="row align-items-center justify-content-center g-4">
                        <div class="col-12 col-md-7">
                            <div class="mb-4">
                                <input type="text" name="nombre" class="campo-linea w-100" placeholder="Tu nombre" required>
                            </div>
                            <div>
                                <input type="text" name="telefono" class="campo-linea w-100" placeholder="Tu número de teléfono" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 text-center">
                            <button type="submit" class="boton-redondo border-0">Llámanos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="assets/img/airpods-hero.png" alt="AirPods Esquina" class="img-esquina d-none d-lg-block">
    </section>

    <footer class="fondo-gris-hero py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="fw-bold fs-4">A</span>
            <span class="small text-secondary">AirPods Max</span>
        </div>
    </footer>

    <a href="https://wa.me/573143389750" target="_blank" class="boton-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiperAirpods", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    </script>
</body>
</html>