# Get the input of two numbers
x, y = map(int, input().split())

# Define a function to print a horizontal line of length n
def print_line(n):
    print(" _" * n)

# Define a function to print a vertical line of length n
def print_column(n, m):
    for i in range(n):
        print("| " * (m + 1))
        print_line(m)

# Print the shape according to the input
print_line(y) # Print the top line
print_column(x , y) # Print the left column
#print_line(y) # Print the bottom line