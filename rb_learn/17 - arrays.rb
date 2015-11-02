=begin
	creating simple arrays
=end

arr1 = [1,2,3,4,5,6,7,8,9,0]
arr2 = ["abhilash","aneesh","nayana"]
arr3 = [true, false, false, true, false, true, true]


arr1.each {|x| print x + ", "}

arr2.each {|val| print "#{val} "}

arr2.each {|x| print x + " "}