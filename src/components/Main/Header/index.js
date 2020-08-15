import React from "react";
import PropTypes from "prop-types";

const Header = (props) => {
  return (
    <div>
      <div>
        <div className="header">
          <div className="header-top">
            <div className="container">
              <div className="search">
                <form>
                  <input
                    type="text"
                    defaultValue="Search "
                    onfocus="this.value = '';"
                    onblur="if (this.value == '') {this.value = 'Search';}"
                  />
                  <input type="submit" defaultValue="Go" />
                </form>
              </div>
              <div className="header-left">
                <ul>
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="register.html">Register</a>
                  </li>
                </ul>
                <div className="cart box_1">
                  <a href="checkout.html">
                    <h3>
                      {" "}
                      <div className="total">
                        <span className="simpleCart_total" /> (
                        <span
                          id="simpleCart_quantity"
                          className="simpleCart_quantity"
                        />{" "}
                        items)
                      </div>
                      <img src="images/cart.png" alt="" />
                    </h3>
                  </a>
                  <p>
                    <a href="javascript:;" className="simpleCart_empty">
                      Empty Cart
                    </a>
                  </p>
                </div>
                <div className="clearfix"> </div>
              </div>
              <div className="clearfix"> </div>
            </div>
          </div>
          {/* <div className="container">
            <div className="head-top">
              <div className="logo">
                <a href="index.html">
                  <img src="images/logo.png" alt="" />
                </a>
              </div>
              <div className=" h_menu4">
                <ul className="memenu skyblue">
                  <li className="active grid">
                    <a className="color8" href="index.html">
                      Home
                    </a>
                  </li>
                  <li>
                    <a className="color1" href="#">
                      Men
                    </a>
                    <div className="mepanel">
                      <div className="row">
                        <div className="col1">
                          <div className="h_nav">
                            <ul>
                              <li>
                                <a href="products.html">Accessories</a>
                              </li>
                              <li>
                                <a href="products.html">Bags</a>
                              </li>
                              <li>
                                <a href="products.html">Caps &amp; Hats</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Hoodies &amp; Sweatshirts
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Jackets &amp; Coats</a>
                              </li>
                              <li>
                                <a href="products.html">Jeans</a>
                              </li>
                              <li>
                                <a href="products.html">Jewellery</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Jumpers &amp; Cardigans
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Leather Jackets</a>
                              </li>
                              <li>
                                <a href="products.html">Long Sleeve T-Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">Loungewear</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div className="col1">
                          <div className="h_nav">
                            <ul>
                              <li>
                                <a href="products.html">Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Shoes, Boots &amp; Trainers
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Shorts</a>
                              </li>
                              <li>
                                <a href="products.html">Suits &amp; Blazers</a>
                              </li>
                              <li>
                                <a href="products.html">Sunglasses</a>
                              </li>
                              <li>
                                <a href="products.html">Sweatpants</a>
                              </li>
                              <li>
                                <a href="products.html">Swimwear</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Trousers &amp; Chinos
                                </a>
                              </li>
                              <li>
                                <a href="products.html">T-Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Underwear &amp; Socks
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Vests</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div className="col1">
                          <div className="h_nav">
                            <h4>Popular Brands</h4>
                            <ul>
                              <li>
                                <a href="products.html">Levis</a>
                              </li>
                              <li>
                                <a href="products.html">Persol</a>
                              </li>
                              <li>
                                <a href="products.html">Nike</a>
                              </li>
                              <li>
                                <a href="products.html">Edwin</a>
                              </li>
                              <li>
                                <a href="products.html">New Balance</a>
                              </li>
                              <li>
                                <a href="products.html">Jack &amp; Jones</a>
                              </li>
                              <li>
                                <a href="products.html">Paul Smith</a>
                              </li>
                              <li>
                                <a href="products.html">Ray-Ban</a>
                              </li>
                              <li>
                                <a href="products.html">Wood Wood</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li className="grid">
                    <a className="color2" href="#">
                      {" "}
                      Women
                    </a>
                    <div className="mepanel">
                      <div className="row">
                        <div className="col1">
                          <div className="h_nav">
                            <ul>
                              <li>
                                <a href="products.html">Accessories</a>
                              </li>
                              <li>
                                <a href="products.html">Bags</a>
                              </li>
                              <li>
                                <a href="products.html">Caps &amp; Hats</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Hoodies &amp; Sweatshirts
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Jackets &amp; Coats</a>
                              </li>
                              <li>
                                <a href="products.html">Jeans</a>
                              </li>
                              <li>
                                <a href="products.html">Jewellery</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Jumpers &amp; Cardigans
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Leather Jackets</a>
                              </li>
                              <li>
                                <a href="products.html">Long Sleeve T-Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">Loungewear</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div className="col1">
                          <div className="h_nav">
                            <ul>
                              <li>
                                <a href="products.html">Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Shoes, Boots &amp; Trainers
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Shorts</a>
                              </li>
                              <li>
                                <a href="products.html">Suits &amp; Blazers</a>
                              </li>
                              <li>
                                <a href="products.html">Sunglasses</a>
                              </li>
                              <li>
                                <a href="products.html">Sweatpants</a>
                              </li>
                              <li>
                                <a href="products.html">Swimwear</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Trousers &amp; Chinos
                                </a>
                              </li>
                              <li>
                                <a href="products.html">T-Shirts</a>
                              </li>
                              <li>
                                <a href="products.html">
                                  Underwear &amp; Socks
                                </a>
                              </li>
                              <li>
                                <a href="products.html">Vests</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div className="col1">
                          <div className="h_nav">
                            <h4>Popular Brands</h4>
                            <ul>
                              <li>
                                <a href="products.html">Levis</a>
                              </li>
                              <li>
                                <a href="products.html">Persol</a>
                              </li>
                              <li>
                                <a href="products.html">Nike</a>
                              </li>
                              <li>
                                <a href="products.html">Edwin</a>
                              </li>
                              <li>
                                <a href="products.html">New Balance</a>
                              </li>
                              <li>
                                <a href="products.html">Jack &amp; Jones</a>
                              </li>
                              <li>
                                <a href="products.html">Paul Smith</a>
                              </li>
                              <li>
                                <a href="products.html">Ray-Ban</a>
                              </li>
                              <li>
                                <a href="products.html">Wood Wood</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a className="color4" href="blog.html">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a className="color6" href="contact.html">
                      Conact
                    </a>
                  </li>
                </ul>
              </div>
              <div className="clearfix"> </div>
            </div> */}
        </div>
      </div>
    </div>
  );
};

Header.propTypes = {};

export default Header;
