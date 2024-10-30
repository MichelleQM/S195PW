@extends ('layouts.plantilla1')
@section('titulo', 'Portada')
@section('contenido1')
<div class="container bg-warning text-white">
    <h1 class="text-center">Biblioteca el rincon de lectura</h1>
</div>

<div class="container">
    <h3 class="text-aling">James Bridle contra el optimismo digital: la urgencia de repensar nuestro uso de la tecnología</h3>
    <h5>
        En este ensayo libre y divagante, el experto en inteligencia artificial fuerza los límites de las convenciones tecnológicas comúnmente asumidas para hallar nuevos modos de convivir con ella.
    </h5>
    <center>
    <image src="{{asset('imagenes/noticia.webp')}}" class="img-fluid" alt="Responsive image">
    <center>
        <br>
        <p>
            El año pasado aparecieron varios estudios que revelaban la escandalosa cantidad de agua que consumen los centros de datos dedicados a la inteligencia artificial. 
            Doce meses después, todavía echamos en falta el estudio que determine el volumen de energía que consume la torrencial cantidad de libros que se está escribiendo y publicando sobre esta tecnología.
            Ironías aparte, y revisando la lista de novedades de no ficción que se presentan este año en la Feria del Libro de Frankfurt, sorprende que todas las novedades de trade de editoriales como el MIT están centradas al unísono en analizar cualquier pormenor de la IA desde ángulos insospechados. 
            Uno es consciente de la decisiva potencialidad de la IA para cambiar muchas dimensiones de nuestra existencia. Eso no evita que haya una fecundidad editorial tan objetivamente inflada acerca de la inteligencia artificial -Harari mediante- que corramos el riesgo de oscurecer la reflexión valiosa del texto oportunista.
        </p>
        <p>
            El libro de James Bridle (Londres, 1980) que motiva este artículo, Modos de existir, es una rara avis dentro de este panorama editorial. 
            Porque lo que nos propone a los lectores aquí no es un ensayo al uso, sino un experimento. Una travesía intelectual.
            "Comencemos a imaginar de otra manera, con la naturaleza como cómplice" (p. 42), indica Bridle al inicio de este texto. 
            Con la excusa de un viaje que Bridle realiza por Grecia -y en el que comienza, por cierto, denunciando las prácticas con IA de Repsol en Épiro-, el autor analiza, de forma libre y divagante, cómo debemos repensar nuestra relación humana
            con las máquinas y con nuestro entorno en este momento actual en el que la presencia de la tecnología es tan aplastante.
        </p>
        <br>
        <h5>Un espíritu provocador</h5>
    <center>
        <image src="{{asset('imagenes/libro1.jpg')}}" class="img-fluid" alt="Responsive image">
    <center>
        <p>Para ese fin, Bridle realiza un viaje flaneante de dos años en el que investiga los principios esenciales de lo que comprendemos como inteligencia y lo que entendemos como tecnología, y su funcionalidad. En su camino, Bridle estudia las diferentes expresiones de inteligencia no-humana que encontramos en nuestro entorno, en nuestra naturaleza; acude a los principios iniciales de la computación para descifrar sus ideas esenciales; reflexiona sobre el origen de las democracias occidentales y, entre mucha erudición y un gran atrevimiento intelectual, repasa nuestra relación humana con el azar (una característica ajena a nuestras máquinas) y, como decimos, con la inteligencia en sí (que él destaca por su naturaleza relacional).
        Vaya por delante que James Bridle es un autor muy particular: ingeniero informático y especialista en IA, él se 
        define profesionalmente como artista y escritor, y emplea para sí mismo los pronombres "ellos". Su anterior obra, La nueva edad oscura 
        (Debate, 2018), obtuvo mucho eco desvelando el triste envés del optimismo digital, aunque su proyección futurista era innecesariamente deprimente.
        En Modos de existir hallamos, con una mayor dosis de esperanza, una crítica y un cuestionamiento de nuestra presente sociedad de la 
        información con un espíritu provocador, que uno observa parecido al de los ismos y las vanguardias de principios del XX en reacción al industrialismo; aunque con el marco intelectual de las teorías postimperialistas, queer (lenguajes de programación queer (p.288)), de cuestionamiento antropocéntrico, así como de redes ecológicas (¿Michel Nieva?).
        </p>
</div>
<br>
<!-- inician cartas de descripcion breve de libros -->
<div class="row">
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('imagenes/portada1.jpg')}}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">A dos Metros de ti</h5>
                        <p class="card-text">Dos adolescentes que se encuentran en el hospital, ambos con enfermedades muy graves y amenazantes de sus vidas, se conocen y comienzan a enamorarse.</p>
                        <p class="card-text"><small class="text-body-secondary">Rachael Lippincott, 2014</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('imagenes/portada2.jpg')}}" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">The Book of Stolen Dreams</h5>
                        <p class="card-text">Cuando Rachel y Robert reciben un libro robado por su padre bibliotecario, tienen que huir y protegerlo a toda costa. Con su padre capturado y todos buscando el Libro, deben descubrir sus secretos y localizar la última página que falta. Pero el cruel y calculador Charles Malstain les sigue la pista.</p>
                        <p class="card-text"><small class="text-body-secondary">David Farr, 2021</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('imagenes/portada3.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Cada Historia Cuenta</h5>
                        <p class="card-text">“Cada historia cuenta” es un libro solidario de relatos que recoge historias presentadas a la I edición del Concurso de Relatos “Cada historia cuenta” organizado por la Fundación AINDACE. </p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- terminan cartas de descripcion -->
@endsection
