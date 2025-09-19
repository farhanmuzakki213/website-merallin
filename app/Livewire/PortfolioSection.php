<?php

namespace App\Livewire;

use Livewire\Component;

class PortfolioSection extends Component
{
    public $portfolioItems = [];
    public $activeFilter = '*';
    public $perPage = 6;
    public $totalItems;

    public function mount()
    {
        $this->loadItems();
    }

    public function loadItems()
    {
        $allItems = collect($this->getAllPortfolioItems());

        $filteredItems = $allItems;
        if ($this->activeFilter !== '*') {
            $filteredItems = $allItems->where('category', $this->activeFilter);
        }

        $this->totalItems = $filteredItems->count();

        $this->portfolioItems = $filteredItems->take($this->perPage)->all();
    }

    public function loadMore()
    {
        $this->perPage += 6;
        $this->loadItems();

        $this->dispatch('portfolio-updated', filter: $this->activeFilter);
    }

    public function filter(string $category)
    {
        $this->activeFilter = $category;
        $this->perPage = 6;
        $this->loadItems();

        $this->dispatch('portfolio-updated', filter: $this->activeFilter);
    }

    public function render()
    {
        return view('livewire.portfolio-section');
    }

    private function getAllPortfolioItems(): array
    {
        return [
            ['category' => 'baju', 'image' => 'masonry-portfolio-1-min.jpg', 'title' => 'Baju Safety'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-2-min.jpg', 'title' => 'Jersey'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-3-min.jpg', 'title' => 'T-Shirt'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-4-min.jpg', 'title' => 'T-Shirt'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-5-min.jpg', 'title' => 'T-Shirt'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-6-min.jpg', 'title' => 'Mug'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-7-min.jpg', 'title' => 'Cyclewear'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-8-min.jpg', 'title' => 'Sportwear'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-9-min.jpg', 'title' => 'Seragam Kantor'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-10-min.jpg', 'title' => 'Polo Safety'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-11-min.jpg', 'title' => 'Polo Sportwear'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-12-min.jpg', 'title' => 'Seragam Safety'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-13-min.jpg', 'title' => 'Sportwear'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-14-min.jpg', 'title' => 'Stationery (Peralatan Kantor)'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-15-min.jpg', 'title' => 'Seragam Safety'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-16-min.jpg', 'title' => 'Seragam Kantor'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-17-min.jpg', 'title' => 'Rompi'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-18-min.jpg', 'title' => 'Jaket'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-19-min.jpg', 'title' => 'Totebag'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-20-min.jpg', 'title' => 'Sepatu Safety'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-21-min.jpg', 'title' => 'Helm Proyek'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-22-min.jpg', 'title' => 'Jersey'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-23-min.jpg', 'title' => 'Botol Minum'],
            ['category' => 'produk', 'image' => 'masonry-portfolio-24-min.jpg', 'title' => 'Topi'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-25-min.jpg', 'title' => 'Polo'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-26-min.jpg', 'title' => 'Seragam Safety'],
            ['category' => 'baju', 'image' => 'masonry-portfolio-27-min.jpg', 'title' => 'T-Shirt'],
            ['category' => 'translog', 'image' => 'masonry-portfolio-28-min.jpg', 'title' => 'Ekspedisi Logistik'],
            ['category' => 'translog', 'image' => 'masonry-portfolio-29-min.jpg', 'title' => 'Ekspedisi Logistik'],
            ['category' => 'translog', 'image' => 'masonry-portfolio-30-min.jpg', 'title' => 'Ekspedisi Logistik'],
            ['category' => 'translog', 'image' => 'masonry-portfolio-32-min.jpg', 'title' => 'Ekspedisi Logistik'],
            ['category' => 'translog', 'image' => 'masonry-portfolio-31-min.jpg', 'title' => 'Ekspedisi Logistik'],
        ];
    }
}
