const fees = [
  {
    price: 10.75,
    title: "Normaal tarief"
  }, {
    price: 9.75,
    title: "Kortingstarief"
  }, {
    price: 8.05,
    title: "Kinepolis Student Card"
  }
];

const extras = [
  {
    price : 2.00,
    title : "Supplement 3D"
  }, {
    price : 2.00,
    title : "Supplement Escape"
  }, {
    price : 3.00,
    title : "Supplement HFR 3D"
  }, {
    price : 0.75,
    title : "Supplement Film Lange Speelduur (>/=2u15)"
  }, {
    price : 2.50,
    title : "Supplement Cosy Zone"
  }, {
    price : 1.00,
    title : "Supplement Atmos"
  }
];

const extraNames = extras.map((extra) => extra.title);
const extraPrices = extras.map((extra) => extra.price);

// create all combinations of fees and extras
extraPrices.forEach((extra, i) => {
  const sum = [];
  sum.push(`${fees[0].title}: ` + (extra + fees[0].price));
  sum.push(`${fees[1].title}: ` + (extra + fees[1].price));
  sum.push(`${fees[2].title}: ` + (extra + fees[2].price));
  console.log(sum);

  // place items in list
  const content = document.getElementById("content");

  const text = document.createElement('h3');
  console.log(i)
    text.innerHTML = extraNames[i] //only the index part corresponding to the current forEach index of prices;
    content.appendChild(text);
  
  const list = document.createElement('ul');
  content.appendChild(list);

  sum.forEach((data)=> {
    const item = document.createElement('li');
    item.innerHTML = data;
    list.appendChild(item);
  });
  });



