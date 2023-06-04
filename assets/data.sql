INSERT INTO product (name, price, description, calorie, carbohydrate, protein, fat)
VALUES ("베이글", 6990, "신선한 재료로 구워낸 플레인 베이글은 매일의 식사에 신선한 시작을
                선사합니다. 고소한 베이글의 향기와 부드럽고 쫄깃한 질감은 입안
                가득 퍼지며, 담백한 맛으로 식사를 즐길 수 있습니다. 플레인
                베이글은 식단을 가볍게 유지하고자 하는 분들에게 이상적인
                선택입니다. 건강하고 맛있는 식단을 추구하는 당신에게 플레인
                베이글은 완벽한 파트너입니다", 100, 20, 5, 2).
       ("제로 콜라 1.5L", 1500, "다용도로 사용할 수 있는 상품입니다.", 0, 0, 0, 0),
       ("신라면 건면", 5500, "맛있는 면 요리가 많고 많지만 라면을 100% 대체할 순 없지요. 
       라면이 유독 생각나는 날에는 팜유로 튀겨 만드는 유탕 대신 100˚C의 뜨거운 바람으로 말려 완성한 건면으로!
       일반 라면에 비해 기름지지 않고 칼로리는 더 낮아 가벼운 마음으로 먹을 수 있죠.", 350, 68, 9, 4.6);

CREATE TABLE orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  accoutId VARCHAR(50) NOT NULL,
  orderName VARCHAR(50) NOT NULL,
  deliveryAddress VARCHAR(50) NOT NULL,
  orderTel INT NOT NULL,
  orderText VARCHAR(100) NOT NULL,
  productList VARCHAR(200) NOT NULL,
  productQuantityList VARCHAR(200) NOT NULL,
  totalPrice INT NOT NULL
);