<?php
	echo "
&allocations
        nelements=2,
        natoms=2,
        ngrid(:)=20 20 2
&end
&crystal
        lfactor=1,
        lattvec(:,1)=2.459500 0.000000 0.000000 ,
        lattvec(:,2)=1.229750 2.129989 0.000000 ,
        lattvec(:,3)=0.000000 0.000000 24.595000 ,
        elements="C" "C"
        types=1 2 ,
        positions(:,1)=0.00  0.00  0.00,
        positions(:,2)=0.333333 0.333333 0.000
        scell(:)=4 4 1

&end
&parameters
        T=300.
        scalebroad=1.0
&end
&flags
        nonanalytic=.TRUE.
        nanowires=.FALSE.
&end	
	"
?>
