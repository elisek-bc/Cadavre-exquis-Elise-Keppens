const movies = [
    "Notti Magiche",
    "Emma Peeters",
    "Yomeddine",
    "The Wild Pear Tree",
    "Aladdin",
    "Green Book",
    "The Favourite",
    "Vox Lux",
    "High Life",
    "Nous Finirons Ensemble",
    "Gloria Bell",
    "Casper & Emma Maken Theater"
];

const wrapWithTag = (content,tag) => 
`<${tag}>${content}</${tag}>`;

document.write(`<ol>`);
    movies.reverse().forEach(movie => document.write(wrapWithTag(movie.toLowerCase(),`li`)));
document.write(`</ol`);
