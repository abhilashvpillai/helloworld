=begin
	creating and using hashes
=end

ha1 = {"one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5}

ha2 = Hash.new
ha2["first_name"]="abhilash"
ha2["middle_name"]="viswanathan"
ha2["last_name"]="pillai"

ha3 = {1=>10,2=>100,3=>1000,4=>10000,5=>100000}


ha1.each {|str,val| puts "#{str} -> #{val}"}

ha2.each {|field,value| puts field + " : " + value}

ha3.each {|powers,value| print "[#{powers},#{value}] "}