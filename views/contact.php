<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffc0cb; /* Pink background */
            color: #333;
        }
        header {
            background-color: #f8a5c2;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        header p {
            margin: 0;
            font-size: 1rem;
            color: #555;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        .form-group {
            flex: 1 1 calc(50% - 10px);
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: none;
            height: 100px;
        }
        .form-group button {
            background-color: #e91e63;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #d81b60;
        }
        .newsletter {
            background-color: #ffe4e1;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-top: 20px;
        }
        .newsletter input {
            padding: 10px;
            width: calc(100% - 120px);
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .newsletter button {
            padding: 10px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        footer {
            background-color: #c2185b;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        footer p {
            margin: 5px 0;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-top: 20px;
        }
        .contact-card {
            flex: 1 1 calc(33.33% - 20px);
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .map {
            margin-top: 20px;
        }
        .map iframe {
            width: 100%;
            border: 0;
            border-radius: 10px;
            height: 300px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        
    </header>
    <div class="container">
        <div class="form-section">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Write your message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </div>
        <div class="newsletter">
            <h2>Our Newsletters</h2>
            <p>Subscribe to our newsletter to stay updated.</p>
            <input type="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
        </div>
        <div class="contact-info">
            <div class="contact-card">
                <p><strong>Phone</strong></p>
                <p>+123 456 789</p>
            </div>
            <div class="contact-card">
                <p><strong>Email</strong></p>
                <p>piahlutpiah786@gmail.com</p>
            </div>
            <div class="contact-card">
                <p><strong>Address</strong></p>
                <p>123 Street Name, City</p>
            </div>
        </div>
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345099994!2d144.95373531547677!3d-37.81720987975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf57771c5b8df41a!2sFlinders%20Street%20Station!5e0!3m2!1sen!2sau!4v1619827297102!5m2!1sen!2sau" 
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Your Company. All Rights Reserved.</p>
        <p> piahlutpiah786@gmail.com +123 456 789</p>
    </footer>
</body>
</html>
