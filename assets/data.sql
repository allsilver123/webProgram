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

INSERT INTO product (name, price, description, calorie, carbohydrate, protein, fat)
VALUES ("닭가슴살만두", 9990, "닭가슴살 만두는 신선하고 고품질의 닭가슴살을 사용하여 만든 건강하고 맛있는 만두입니다. 
        이 만두는 고기의 풍미와 함께 건강한 식사를 선호하는 분들을 위해 특별히 개발되었습니다.", 175, 20, 10, 6);

INSERT INTO product (name, price, description, calorie, carbohydrate, protein, fat)
VALUES ("저칼로리 아이스크림", 12990, "저칼로리 아이스크림은 건강을 중시하는 분들을 위해 개발된 맛있고 가벼운 아이스크림 제품입니다. 
이 아이스크림은 적은 칼로리 함량과 함께 진정한 아이스크림의 맛과 풍미를 즐길 수 있도록 고안되었습니다.", 75, 13, 4, 2);

INSERT INTO product (name, price, description, calorie, carbohydrate, protein, fat)
VALUES ("토마토 파스타", 4990, "토마토 파스타는 신선한 토마토와 풍부한 재료로 만들어진 맛있는 이탈리안 스타일의 파스타 제품입니다. 
이 파스타는 진한 토마토 소스와 함께 고소하고 신선한 맛을 제공하여 파스타를 좋아하는 사람들에게 최적의 선택입니다.", 107, 19.63, 3.7, 1.85);