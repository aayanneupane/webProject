const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');
const app = express();
const port = 3000;

// Enable CORS for cross-origin requests
app.use(cors());

// MySQL connection setup
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '', // No password by default in XAMPP
    database: 'your_database' // Replace with your actual database name
});

// Connect to MySQL
db.connect(err => {
    if (err) throw err;
    console.log('Connected to the database');
});

// Endpoint to get service providers based on user location
app.get('/api/service_providers', (req, res) => {
    const { lat, lon } = req.query;

    // Check if lat and lon are provided and valid
    if (!lat || !lon) {
        return res.status(400).json({ error: 'Location (latitude and longitude) is required' });
    }

    // Validate the latitude and longitude values
    if (isNaN(lat) || isNaN(lon)) {
        return res.status(400).json({ error: 'Invalid latitude or longitude' });
    }

    // Calculate the distance and filter service providers
    const query = `
        SELECT *, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance
        FROM service_providers
        HAVING distance < 50
        ORDER BY distance;
    `;

    db.query(query, [lat, lon, lat], (err, results) => {
        if (err) {
            console.error(err);
            return res.status(500).json({ error: 'Database query failed' });
        }

        // If no results, return a message saying no service providers were found
        if (results.length === 0) {
            return res.status(404).json({ message: 'No service providers found within 50km' });
        }

        // Return the results if everything is fine
        res.json(results);
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
