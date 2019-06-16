//async function getCountry(){
//async function BigCountry()     {

const Country = [
    { name: 'Thailand', abbr: 'TH', remark: "", regionId: 1 },
    { name: 'Singapore', abbr: 'sg', remark: "this is sg", regionId: 1 },
    { name: 'United State', abbr: 'US', remark: "", regionId: 7 },
    { name: 'Canada', abbr: 'CA', remark: "", regionId: 7 },
];

const Region = [
    { id: 1, name: "Asia" },
    { id: 2, name: "South America" },
    { id: 7, name: "North America" }
];


/*
const posts = [
    { title: 'post one1', body: 'this is post one' },
    { title: 'post two', body: 'this is post two' },

];
*/

function getCountry() {
    setTimeout(() => {
        let output = '';
        Country.forEach((post, index) => {
            output += `<li>${post.name}</li>`
        });
        document.body.innerHTML = output;
    }, 1000);

}


function createPost(post, callback) {
    setTimeout(() => {
        Country.push(post);
        callback();
    }, 2000);
}
getCountry();

createPost({  name: 'Spain', abbr: 'ESP', remark: "", regionId: 6 }, getCountry);



