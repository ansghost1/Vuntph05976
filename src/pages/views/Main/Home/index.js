import React, { useState, useEffect } from "react";
import PropTypes from "prop-types";
import { BrowserRouter as Router, Link } from "react-router-dom";
import apiRequest from "./../../../../api/productApi";

const Home = ({ products }) => {
  const [categories, setCategories] = useState([]);
  useEffect(() => {
    const getCategories = async () => {
      try {
        const response = await apiRequest.getCateAll();
        setCategories(response.data);
      } catch (error) {}
    };
    getCategories();
  }, []);
  return (
    <div>
      {/* <div className="content"> */}
      <div className="container">
        <div className="content-top">
          {products.map(({ name, image, price, sale, cate }, index) => (
            <div key={index}>
              <div className="grid-in">
                {categories.map((categories) =>
                  categories.id === cate ? categories.name : ""
                )}
                <div className="col-md-4 grid-top">
                  <a href="#" className="b-link-stripe b-animate-go  thickbox">
                    <img className="img-responsive" src={image} alt="" />
                    <div className="b-wrapper">
                      <h3 className="b-animate b-from-left    b-delay03 ">
                        <span>{name}</span>
                      </h3>
                    </div>
                  </a>
                  <a href="#" class="item_add">
                    <p class="number item_price">
                      <strike> Giá: {price}</strike>
                    </p>
                  </a>
                  <a href="#" class="item_add">
                    <p class="number item_price"> Giảm Giá: {sale}</p>
                  </a>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Home;
