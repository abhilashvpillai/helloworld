=begin
	multi-dimensional arrays
=end

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