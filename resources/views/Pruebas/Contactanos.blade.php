<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webleb</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
      background: #333;
      font-family: Poppins;
      text-transform: uppercase;
      font-size: 11px;
      background: #0f0c29; /* fallback for old browsers */
      background: -webkit-linear-gradient(
        to right,
        #24243e,
        #302b63,
        #0f0c29
      ); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(
        to right,
        #24243e,
        #302b63,
        #0f0c29
      ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    h1 {
      margin: 0;
    }

    #contact {
    margin: 2em auto;
    width: 150px;
    height: 30px;
    line-height: 30px;
    font-weight: 700;
    text-align: center;
    cursor: pointer;
    border: 1px solid white;
    }

    #contact:hover {
    background: #000000;
    }
    #contact:active {
    background: #444;
    }


    .contact-form {
      display: none;
      border: 6px solid 3324be;
      padding: 2em;
      width: 400px;
      text-align: center;
      background: #fff;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      border-radius: 16px;
    }

    input,
    textarea {
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      border-radius: 15px;
    }
    textarea {
      height: 80px;
      resize: none;
    }

    .formBtn {
      outline: 0;
      background: #3324be;
      width: 200px;
      height: 30px;
      border: 0;
      color: #ffffff;
      font-size: 1.2em;
      border-radius: 15px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div id="contact" class="formBtn">Contactanos</div>
        <div id="contactForm" class="contact-form">
          <h1 style="margin-bottom: 10px;">Pongase en contacto</h1>
          <form action="#">
            <input placeholder="Nombre" type="text" required />
            <input placeholder="Email" type="email" required />
            <input placeholder="Tema" type="text" required />
            <input placeholder="Mensaje"/>
            <button class="formBtn" type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });
      $(document).mouseup(function (e) {
        var container = $("#contactForm");

        if (!container.is(e.target)
            && container.has(e.target).length === 0)
        {
            container.fadeOut();
        }
      });
    });
  </script>
</body>
</html>
