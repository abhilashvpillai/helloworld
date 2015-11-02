# Creating and iterating over arrays

arr1 = [1,2,3,4,5,6,7,8,9,0]
arr2 = ["abhilash","aneesh","nayana"]
arr3 = [true, false, false, true, false, true, true]


arr1.each {|x| print x + ", "}

arr2.each {|val| print "#{val} "}

arr2.each {|x| print x + " "}

# Creating and iterating over multidimensional arrays

mar1 = [[1,2,3],[4,5,6],[7,8,9]]

mar2 = [["abhilash","viswanathan","pillai"],["aneesh","viswanath"],["nayana","jayaram"]]

mar3 = [[true, false, false],[false, true, true]]


mar1.each { |x| puts x }

mar2.each { |names|
	names.each { |name| print name + " " }
	puts
}

mar3.each {|val|
	puts val
}

# Creating and iterating over hashes

ha1 = {"one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5}

ha2 = Hash.new
ha2["first_name"]="abhilash"
ha2["middle_name"]="viswanathan"
ha2["last_name"]="pillai"

ha3 = {1=>10,2=>100,3=>1000,4=>10000,5=>100000}


ha1.each {|str,val| puts "#{str} -> #{val}"}

ha2.each {|field,value| puts field + " : " + value}

ha3.each {|powers,value| print "[#{powers},#{value}] "}