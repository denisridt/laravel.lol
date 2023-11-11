  <x-layout>
      <x-slot:title>
          Нашо новый заголовок
      </x-slot:title>

      <x-slot:content>
          <button> {{$name}} </button>
          <button> <?= $name; ?> </button>
          <button> <?php echo $name; ?> </button>
      </x-slot:content>


  </x-layout>
