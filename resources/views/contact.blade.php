<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctanos - The Last Eden</title>

    <!-- Importar la fuente Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/forms.css"> <!-- Cambia el path según tu estructura -->
    <link rel="icon" href="imagenes/icon-16x16.png" type="image/png">

</head>
<body class="bg-dark text-light">

    <section class="form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h2>Contáctanos</h2>

                        <!-- Formulario modificado para enviar con FormSubmit -->
                        <form action="https://formsubmit.co/091ecb6607809986880bf9caab18d385" method="POST" onsubmit="showSuccessMessage()">
                            <!-- Agrega el campo hidden _next para redirigir -->
                            <input type="hidden" name="_next" value="https://web-production-c374b.up.railway.app/?status=success"> <!-- Cambia esta URL -->
                            <input type="hidden" name="_captcha" value="false">

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu mensaje" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark mt-4" style="color: #white; background-color: black; border: none;" onmouseover="this.style.backgroundColor='#C7997B'" onmouseout="this.style.backgroundColor='black'">Enviar Mensaje</button>
                            </div>
                        </form>

                        <!-- Contenedor para el mensaje de éxito -->
                        <div id="success-message" style="display: none; color: white; margin-top: 15px; text-align: center; ">
                            ¡Tu mensaje ha sido enviado con éxito!
                        </div>

                        <div class="text-center mt-4">
                            <a href="/" class="btn btn-dark mt-4" style="color: #white; background-color: black; border: none;" onmouseover="this.style.backgroundColor='#C7997B'" onmouseout="this.style.backgroundColor='black'">Volver al Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showSuccessMessage() {
            // Muestra el mensaje de éxito
            document.getElementById('success-message').style.display = 'block';

            // Redirige al inicio después de 3 segundos
            setTimeout(function() {
                window.location.href = '/';
            }, 3000); // 3 segundos de retraso
        }
    </script>

</body>
</html>
