const bestActors = [
    {
      actor: "Forest Whitaker",
      film: "The Last King of Scotland",
      age: 45
    }, {
      actor: "Daniel Day-Lewis",
      film: "There Will Be Blood",
      age: 50
    }, {
      actor: "Sean Penn",
      film: "Milk",
      age: 48
    }, {
      actor: "Jeff Bridges",
      film: "Crazy Heart",
      age: 60
    }, {
      actor: "Colin Firth",
      film: "The King's Speech",
      age: 50
    }, {
      actor: "Jean Dujardin",
      film: "The Artist",
      age: 39
    }, {
      actor: "Daniel Day-Lewis",
      film: "Lincoln",
      age: 55
    }, {
      actor: "Matthew McConaughey",
      film: "Dallas Buyers Club",
      age: 44
    }, {
      actor: "Eddie Redmayne",
      film: "The Theory of Everything",
      age: 33
    }, {
      actor: "Leonardo DiCaprio",
      film: "The Revenant",
      age: 41
    }
  ];

const wrapWithTag = (content,tag) => 
`<${tag}>${content}</${tag}>`;

const byAge = (obj1, obj2) => {
    return obj1.age - obj2.age;
};

document.write(`<ul>`);
    bestActors.sort(byAge);
    bestActors.forEach(oscar => document.write(wrapWithTag(oscar.actor,`li`)));
document.write(`</ul`);

console.log(bestActors.reduce((total, oscar) => total + oscar.age, 0));
