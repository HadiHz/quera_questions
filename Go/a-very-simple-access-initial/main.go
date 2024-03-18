package main

import (
	"fmt"
	"math"
	"strconv"
)

type Permissions struct {
	canSeeMessages      bool
	canDeleteMessages   bool
	canEditMessages     bool
	canKickMembers      bool
	canMakeMembersAdmin bool
	canAddMembers       bool
}

func SetUserPermissions(permissions *Permissions) int8 {
	binaryPermission := boolToString(permissions.canAddMembers)
	binaryPermission = binaryPermission + boolToString(permissions.canMakeMembersAdmin)
	binaryPermission = binaryPermission + boolToString(permissions.canKickMembers)
	binaryPermission = binaryPermission + boolToString(permissions.canEditMessages)
	binaryPermission = binaryPermission + boolToString(permissions.canDeleteMessages)
	binaryPermission = binaryPermission + boolToString(permissions.canSeeMessages)

	return binaryToInt(binaryPermission)
}

func GetUserPermissions(permissionsMask int8) *Permissions {
	binaryPermission := intToBinary(permissionsMask)
	length := len([]rune(binaryPermission))
	canSeeMessages := convertStringToBoolean(binaryPermission, length-1)
	canDeleteMessages := convertStringToBoolean(binaryPermission, length-2)
	canEditMessages := convertStringToBoolean(binaryPermission, length-3)
	canKickMembers := convertStringToBoolean(binaryPermission, length-4)
	canMakeMembersAdmin := convertStringToBoolean(binaryPermission, length-5)
	canAddMembers := convertStringToBoolean(binaryPermission, length-6)
	return &Permissions{
		canSeeMessages:      canSeeMessages,
		canDeleteMessages:   canDeleteMessages,
		canEditMessages:     canEditMessages,
		canKickMembers:      canKickMembers,
		canMakeMembersAdmin: canMakeMembersAdmin,
		canAddMembers:       canAddMembers,
	}
}

func convertStringToBoolean(str string, position int) bool {
	if position < 0 {
		return false
	}
	number, _ := strconv.Atoi(string([]rune(str)[position]))
	return number == 1
}

func boolToString(boolValue bool) string {
	if boolValue {
		return "1"
	}
	return "0"
}

func intToBinary(number int8) string {
	result := ""
	for number >= 1 {
		a := number % 2
		number = number / 2
		result = strconv.Itoa(int(a)) + result
	}
	return result
}

func binaryToInt(binaryNumber string) int8 {
	var length = len([]rune(binaryNumber))
	var result = 0
	for i := 0; i < length; i++ {
		number, _ := strconv.Atoi(string([]rune(binaryNumber)[i]))
		result = result + int(math.Pow(float64(number*2), float64(length-i-1)))
	}
	return int8(result)
}

func main() {
	var variable_a = 5
	fmt.Println(variable_a)
	fmt.Println(intToBinary(115))
	fmt.Println(binaryToInt(intToBinary(115)))
	// fmt.Println(GetUserPermissions(115))
	fmt.Println(SetUserPermissions(GetUserPermissions(1)))
	fmt.Println(GetUserPermissions(1))
}
