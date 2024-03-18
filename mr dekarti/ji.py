number = input()
days = int(number)


carts = []

for i in range(days):
    carts = carts + [input()]

for cart in carts:
    acts = 0
    cart = cart + "1"
    lengthOfCart = len(cart)
    for j in range(lengthOfCart - 1):
        if cart[j] == "0" and cart[j+1] == "0":
            continue
        if cart[j] == "1" and cart[j+1] == "1":
            continue
        if cart[j] == "1" and cart[j+1] == "0":
            continue
        else:
            acts = acts + 1
    print(acts)
