<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ankita Cloth Collections</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        header {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        .contact-box {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .contact-info {
            width: 40%;
            background: #007BFF;
            color: white;
            padding: 30px;
            border-radius: 10px 0 0 10px;
        }

        .contact-info h2 {
            margin-bottom: 20px;
        }

        .contact-form {
            width: 60%;
            padding: 30px;
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background: #0056b3;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: white;
            margin-top: 20px;
        }

        @media(max-width: 768px) {
            .contact-box {
                flex-direction: column;
            }

            .contact-info, .contact-form {
                width: 100%;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Contact Us</h1>
</header>

<div class="container">
    <div class="contact-box">

        <!-- Contact Info -->
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>Address:</strong> Bharatpur,Chitwan</p>
            <p><strong>Phone:</strong> +977-98000000</p>
            <p><strong>Email:</strong> info@ankitacloth.com</p>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send Message</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Subject">
                <textarea rows="5" placeholder="Your Message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>

    </div>
</div>

<footer>
    <p>© 2026 Ankita Cloth Collections</p>
</footer>

</body>
</html>