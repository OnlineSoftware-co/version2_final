const search = document.getElementById('search');
const matchList = document.getElementById('products');

const searchStates = async searchText => {
    const res = await fetch('../../assets/json/products.json');
    const states = await res.json();
    //get matches
    let matches = states.filter(state => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return state.name.search(regex);
    });

    if (searchText.length == 0) {
        matches = [];
    }
    console.log(matches);
}

search.addEventListener('input', () => searchStates(search.value));