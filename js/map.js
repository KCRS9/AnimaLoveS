// Inicializar el mapa
const map = L.map('map').setView([40.4168, -3.7038], 6); // Coordenadas iniciales (España)

// Añadir capa de mapa (OpenStreetMap)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Añadir marcadores para las veterinarias
const veterinarias = [{
        name: "Clínica Veterinaria Barcelona",
        lat: 41.3851,
        lng: 2.1734,
        address: "Calle de la Mascota 12, Barcelona"
    },
    {
        name: "Centro Veterinario Madrid",
        lat: 40.4168,
        lng: -3.7038,
        address: "Avenida Animal 45, Madrid"
    },
    {
        name: "Veterinaria Alicante",
        lat: 38.3452,
        lng: -0.4810,
        address: "Plaza Mascota 78, Alicante"
    },
    {
        name: "Clínica Veterinaria Bilbao",
        lat: 43.2630,
        lng: -2.9350,
        address: "Camino de la Vida 21, Bilbao"
    }
];

veterinarias.forEach(vet => {
    L.marker([vet.lat, vet.lng]).addTo(map)
        .bindPopup(`<strong>${vet.name}</strong><br>${vet.address}`)
        .openPopup();
});