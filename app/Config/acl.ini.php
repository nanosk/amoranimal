;-------------------------------------
; AROs
;-------------------------------------
[empleado]
grupos = 4

[legolas]
grupos = guerreros

[gimli]
grupos = guerreros

[gandalf]
grupos = magos

[frodo]
grupos = hobbits
permitir = ring

[bilbo]
grupos = hobbits

[merry]
grupos = hobbits
deny = cerveza

[pippin]
grupos = hobbits

[gollum]
grupos = visitantes

;-------------------------------------
; ARO Groups
;-------------------------------------
[4]
permitir = index, edit, add

[magos]
permitir = jamón, diplomacia, cerveza

[hobbits]
permitir = cerveza

[visitantes]
permitir = jamón