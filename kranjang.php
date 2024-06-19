<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/s_kranjang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

        <div class="container">
            <div class="center">
                <h2>Champions</h2>
                <div class="list">
                    <div class="item" data-key="1">
                        <div class="img">
                            <img src="./img/champ1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Locker Room Long Sleeve</div>
                            <div class="price">$19</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(1)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="2">
                        <div class="img">
                            <img src="./img/champ2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Roster Signature T-Shirt</div>
                            <div class="price">$20</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(2)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="3">
                        <div class="img">
                            <img src="./img/champ3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Final Buzzer Jersey T-Shirt</div>
                            <div class="price">$19</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(3)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
                
                <h2>Jerseys</h2>
                <div class="list">
                    <div class="item" data-key="4">
                        <div class="img">
                            <img src="./img/jersey1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Icon Edition</div>
                            <div class="price">$159</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(4)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="5">
                        <div class="img">
                            <img src="./img/jersey2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Association Edition</div>
                            <div class="price">$159</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(5)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="6">
                        <div class="img">
                            <img src="./img/jersey3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">2024 NBA All-Star</div>
                            <div class="price">$149</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(6)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
                <h2>By Player Stephen Curry</h2>
                <div class="list">
                    <div class="item" data-key="4">
                        <div class="img">
                            <img src="./img/jersey1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Icon Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(4)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="5">
                        <div class="img">
                            <img src="./img/jersey2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Association Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(5)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="6">
                        <div class="img">
                            <img src="./img/jersey3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">City Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(6)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
                <h2>By Player Klay Thompson</h2>
                <div class="list">
                    <div class="item" data-key="4">
                        <div class="img">
                            <img src="./img/jersey1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Icon Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(4)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="5">
                        <div class="img">
                            <img src="./img/jersey2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Association Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(5)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="6">
                        <div class="img">
                            <img src="./img/jersey3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">City Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(6)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
                <h2>By Player Draymond Green</h2>
                <div class="list">
                    <div class="item" data-key="4">
                        <div class="img">
                            <img src="./img/jersey1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Icon Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(4)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="5">
                        <div class="img">
                            <img src="./img/jersey2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Association Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(5)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>

                    <div class="item" data-key="6">
                        <div class="img">
                            <img src="./img/jersey3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">City Edition</div>
                            <div class="price">$299</div>
                            <input type="number" class="count" min="1" value="1">
                            <button class="add">Add to cart</button>
                            <button class="remove" onclick="Remove(6)"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="cart">
                <div class="name">CART</div>
                <div class="listCart"></div>
            </div>
        </div>
    
    <script src="./js/j_kranjang.js"></script>
</body>
</html>
