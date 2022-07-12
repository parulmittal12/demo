<ul>
@foreach($childs as $child)
   <li>
        {{ $child->parentRel->name }}
   </li>
@endforeach
</ul>