
const Axios = require('axios');

class ProductsService {

	static search(filter, page=0, count=10) {
		return Axios.get(`/api/products/search/${page}/${count}`, {
			filter
		});
	}

}

export default ProductsService;