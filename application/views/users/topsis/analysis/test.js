// Fungsi untuk menghitung nilai preferensi
function calculatePreference(data, weights, impacts) {
    debugger
    // Membuat matriks untuk menyimpan nilai normalisasi
    const normalized = [];
    for (let i = 0; i < data.length; i++) {
        normalized[i] = [];
        for (let j = 0; j < data[i].length; j++) {
            // Menghitung nilai normalisasi
            const sum = data.reduce((acc, row) => acc + row[j] ** 2, 0);
            normalized[i][j] = data[i][j] / Math.sqrt(sum);
            // Menerapkan bobot
            normalized[i][j] *= weights[j];
            // Menerapkan dampak
            normalized[i][j] *= impacts[j] === '+' ? 1 : -1;
        }
    }

    // Membuat matriks untuk menyimpan nilai ideal positif dan ideal negatif
    const idealPos = [];
    const idealNeg = [];
    for (let j = 0; j < data[0].length; j++) {
        idealPos[j] = Math.max(...normalized.map((row) => row[j]));
        idealNeg[j] = Math.min(...normalized.map((row) => row[j]));
    }

    // Menghitung jarak antara setiap alternatif dengan ideal positif dan ideal negatif
    const posDist = [];
    const negDist = [];
    for (let i = 0; i < normalized.length; i++) {
        posDist[i] = Math.sqrt(
            normalized[i].reduce(
                (acc, value, j) => acc + (value - idealPos[j]) ** 2,
                0
            )
        );
        negDist[i] = Math.sqrt(
            normalized[i].reduce(
                (acc, value, j) => acc + (value - idealNeg[j]) ** 2,
                0
            )
        );
    }

    // Menghitung nilai preferensi
    const preference = [];
    for (let i = 0; i < normalized.length; i++) {
        preference[i] = negDist[i] / (posDist[i] + negDist[i]);
    }

    return preference;
}

// Contoh penggunaan
// const data = [
//     [4, 6, 8],
//     [5, 7, 9],
//     [6, 8, 10],
// ];
// const weights = [0.3, 0.4, 0.3];
// const impacts = ['+', '+', '+'];
const data = [
    [3, 3, 4, 3, 3, 5, 5, 5, 4, 4],
    [3, 1, 4, 3, 3, 4, 5, 5, 4, 4],
    [3, 1, 4, 3, 3, 4, 5, 5, 4, 4],
    [3, 3, 4, 3, 3, 4, 5, 5, 4, 4],
    [4, 5, 4, 3, 3, 4, 5, 5, 4, 4],
    [4, 3, 4, 3, 3, 5, 5, 5, 4, 4],
    [4, 4, 4, 3, 3, 5, 5, 5, 5, 4],
    [4, 3, 4, 3, 3, 5, 5, 5, 5, 4],
    [4, 5, 4, 3, 3, 3, 5, 5, 5, 4],
    [4, 3, 4, 3, 3, 5, 5, 5, 5, 4],
    [4, 3, 4, 3, 3, 5, 5, 5, 5, 4],
    [4, 4, 4, 3, 3, 5, 5, 5, 5, 4],
    [5, 5, 5, 4, 5, 5, 5, 5, 5, 4],
    [5, 5, 5, 4, 3, 4, 5, 5, 5, 4],
    [5, 5, 5, 4, 3, 4, 5, 5, 5, 4],
    [5, 3, 5, 4, 3, 5, 5, 5, 5, 4],
    [3, 1, 3, 3, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 3, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 4, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 4, 3, 3, 5, 4, 5, 5],
    [3, 1, 3, 3, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 4, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 4, 3, 3, 5, 4, 5, 5],
    [3, 1, 3, 4, 3, 3, 5, 5, 4, 5],
    [3, 1, 3, 4, 3, 3, 5, 5, 4, 5],
];
var weights = [20, 5, 10, 20, 10, 10, 5, 5, 10, 5];
var impacts = ["-", "+", "+", "+", "+", "+", "+", "+", "+", "+"];
const preference = calculatePreference(data, weights, impacts);
console.log(preference); // Output: [0.2581988897471611, 0.18898223650461357, 0.1091089451179962]
